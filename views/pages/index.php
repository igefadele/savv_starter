<?php
    $pageTitle = "Savv Framework - PHP Web Framework Starter";
    $pageDescription = "Savv is a lightweight PHP web framework for building modern web applications. Get started with this starter template.";

    // Start capturing the HTML content
    ob_start();
?>
<div class="card text-center">
    <div class="badge">Savv Framework</div>
    <h1>Welcome to Savv</h1>
    <p>Savv is a lightweight PHP web framework designed for building modern web applications with ease. This starter
        template provides everything you need to get started quickly.</p>
    <div class="actions">
        <a class="primary" href="https://github.com/savadub/savv" target="_blank">View on GitHub</a>
        <a class="secondary" href="mailto:sales@savadub.com">Contact Us</a>
    </div>
    <p class="note">Explore the documentation and build amazing applications with Savv!</p>
</div>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 

    // Load the layout and inject the variable
    include ROOT_PATH . '/views/layouts/index.php'; 
?>