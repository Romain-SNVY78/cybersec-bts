<?php
/**
 * includes/header.php
 * Requires variables from the calling page:
 *   $page_title   — page title string
 *   $base_path    — '' for root, '../' for pages/
 *   $accent_color — CSS color string (default green)
 *   $accent_rgb   — comma-separated RGB values for the accent
 */
$accent_color = $accent_color ?? '#00ff88';
$accent_rgb   = $accent_rgb   ?? '0,255,136';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? 'Révision') ?> · Cybersécurité BTS SIO</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($base_path) ?>css/style.css">
    <style>:root { --accent: <?= $accent_color ?>; --accent-rgb: <?= $accent_rgb ?>; }</style>
</head>
<body>
<div class="lay">
