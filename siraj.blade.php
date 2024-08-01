<?php
function zipData($source, $destination) {
    if (!extension_loaded('zip')) {
        echo "ZIP extension load nahi hai.";
        return false;
    }

    if (!file_exists($source)) {
        echo "Source file ya directory mojood nahi hai.";
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
        echo "ZIP file banane mein masla hai.";
        return false;
    }

    $source = realpath($source);

    if (is_dir($source)) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($files as $file) {
            $file = realpath($file);

            if (is_dir($file)) {
                $zip->addEmptyDir(str_replace($source . DIRECTORY_SEPARATOR, '', $file . DIRECTORY_SEPARATOR));
            } else if (is_file($file)) {
                if (!$zip->addFile($file, str_replace($source . DIRECTORY_SEPARATOR, '', $file))) {
                    echo "File shamil karne mein masla hai: $file\n";
                    return false;
                }
            }
        }
    } else if (is_file($source)) {
        if (!$zip->addFile($source, basename($source))) {
            echo "File shamil karne mein masla hai: $source\n";
            return false;
        }
    }

    if (!$zip->close()) {
        echo "ZIP file band karne mein masla hai.";
        return false;
    }

    return true;
}

// Istemaal ka tareeqa:
// Kisi directory ko zip karna:
$sourcePath = 'path/to/directory'; // Directory ka rasta
$destinationPath = 'path/to/destination.zip'; // ZIP file ka rasta
if (zipData($sourcePath, $destinationPath)) {
    echo "Directory kamiabi se zip ho gayi hai.";
} else {
    echo "Directory ko zip karne mein masla hai.";
}

// Kisi file ko zip karna:
$sourceFile = 'path/to/file.txt'; // File ka rasta
$destinationFile = 'path/to/file.zip'; // ZIP file ka rasta
if (zipData($sourceFile, $destinationFile)) {
    echo "File kamiabi se zip ho gayi hai.";
} else {
    echo "File ko zip karne mein masla hai.";
}
?>
