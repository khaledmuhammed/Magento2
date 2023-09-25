@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../mage2tv/magento-cache-clean/bin/cache-clean.js
SET COMPOSER_RUNTIME_BIN_DIR=%~dp0
node "%BIN_TARGET%" %*
