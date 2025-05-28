<?php
// seeder.php - Downloads a zip, extracts it, renames folder, creates config

// Configuration
$zipUrl = 'https://github.com/tequitl/wp-lite-base/archive/refs/tags/v1.0.0-alpha.zip'; // Replace with actual URL
$downloadPath = __DIR__ . '/downloaded.zip';
$extractPath = __DIR__;
$newFolderName = 'ilichnois';
$configFile = __DIR__ . '/config.php';

// Download the zip file
function downloadZip($url, $path) {
    if (file_exists($path)) {
        return $path;
    }
    $file = fopen($path, 'w+');
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FILE, $file);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    fclose($file);
    return $path;
}

// Extract zip file
function extractZip($zipPath, $extractTo) {
    $zip = new ZipArchive;
    if ($zip->open($zipPath) === TRUE) {
        $zip->extractTo($extractTo);
        $zip->close();
        return true;
    }
    return false;
}

// Rename extracted folder
function renameFolder($oldPath, $newName) {
    $newPath = dirname($oldPath) . '/' . $newName;
    if (file_exists($oldPath)) {
        return rename($oldPath, $newPath);
    }
    return false;
}

// Create config file with credentials
function createConfigFile($filePath, $username, $password) {
    $content = "<?php\n\n// Database configuration\n\$db_username = '" . $username . "';\n\$db_password = '" . $password . "';\n";
    return file_put_contents($filePath, $content);
}

// Main execution
if (downloadZip($zipUrl, $downloadPath)) {
    if (extractZip($downloadPath, $extractPath)) {
        // Get first extracted folder name
        $extractedFolders = array_filter(glob($extractPath . '/*'), 'is_dir');
        if (!empty($extractedFolders)) {
            $lastFolder = end($extractedFolders);
            if (renameFolder($lastFolder, $newFolderName)) {
                echo "Folder renamed successfully to $newFolderName\n";
            }
        }
        
        // Create config file
        if (!file_exists($configFile)) {
            createConfigFile($configFile, 'admin', 'secure_password');
            echo "Config file created successfully\n";
        } else {
            echo "Config file already exists\n";
        }
        
        // Clean up
        unlink($downloadPath);
    } else {
        echo "Failed to extract zip file\n";
    }
} else {
    echo "Failed to download zip file\n";
}
?>