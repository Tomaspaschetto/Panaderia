<?php $anio = date('Y'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de gestión integral para panaderías.">
    <title>Horno &amp; Cuenta | Gestión para panaderías</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/inicio.css">
</head>
<body>
    <header class="landing-header">
        <a class="landing-brand" href="index.php" aria-label="Horno y Cuenta, inicio"><span class="brand-mark">H<span>+</span></span><span>Horno <b>&amp;</b> Cuenta</span></a>
        <nav class="landing-nav" aria-label="Navegación principal"><a href="#soluciones">Soluciones</a><a href="#modulos">Módulos</a><a href="#contacto">Contacto</a></nav>
        <a class="login-link" href="views/login/login.php">Ingresar <span aria-hidden="true">↗</span></a>
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-copy"><p class="eyebrow"><span></span> Gestión hecha para el oficio</p><h1>Más tiempo para<br><em>hacer</em> lo que importa.</h1><p class="hero-text">Ordená ventas, producción, inventario y pedidos en un solo lugar. Claridad para tu equipo, tranquilidad para vos.</p><div class="hero-actions"><a class="button button-primary" href="views/login/login.php">Entrar al sistema <span>→</span></a><a class="text-link" href="#soluciones">Conocé cómo funciona <span>↓</span></a></div><div class="hero-note"><span class="status-dot"></span> Tu operación, en tiempo real</div></div>
            <div class="hero-visual" aria-label="Pan recién horneado"><div class="visual-label">Desde el primer amasado<br><strong>hasta el cierre del día.</strong></div><div class="visual-stamp">HECHO<br><b>CON OFICIO</b></div></div>
        </section>
        <section class="trust-strip" id="soluciones"><p>Una mirada clara sobre cada parte de tu panadería</p><div class="trust-items"><span>VENTAS</span><i></i><span>PRODUCCIÓN</span><i></i><span>INVENTARIO</span><i></i><span>RENTABILIDAD</span></div></section>
        <section class="solutions-section"><div class="section-intro"><p class="eyebrow"><span></span> Todo conectado</p><h2>El negocio sigue tu ritmo.</h2></div><div class="solution-grid"><article><span class="solution-number">01</span><h3>Decisiones con datos</h3><p>Conocé tus márgenes, tus productos estrella y lo que realmente pasa en el mostrador.</p></article><article><span class="solution-number">02</span><h3>Menos pérdidas</h3><p>Recetas, stock y movimientos registrados para comprar mejor y producir justo.</p></article><article><span class="solution-number">03</span><h3>Un equipo alineado</h3><p>Cada persona tiene a mano lo que necesita, según su rol y su momento del día.</p></article></div></section>
        <section class="modules-section" id="modulos"><div><p class="eyebrow"><span></span> Herramientas del día a día</p><h2>Todo lo que necesitás.<br><em>En un mismo lugar.</em></h2></div><div class="module-list"><span>01&nbsp; Dashboard</span><span>02&nbsp; Productos</span><span>03&nbsp; Recetas</span><span>04&nbsp; Producción</span><span>05&nbsp; Ventas &amp; POS</span><span>06&nbsp; Reportes</span></div></section>
        <section class="closing-section" id="contacto"><p class="eyebrow"><span></span> Hecho para crecer</p><h2>Tu panadería tiene una historia.<br><em>Que los números la acompañen.</em></h2><a class="button button-dark" href="views/login/login.php">Comenzar ahora <span>↗</span></a></section>
    </main>
    <footer class="landing-footer"><span>Horno &amp; Cuenta</span><span>Gestión integral para panaderías</span><span>&copy; <?= $anio ?></span></footer>
</body>
</html>