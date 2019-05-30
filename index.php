<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.ordiservice
 *
 * @copyright   Copyright (C) 2005 - 2018 Ordi Service.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/lib/head.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
</head>

<body>
    <header class="top-bar">
    <?php echo '<div class="title-bar-title">' . $siteName . '</div>'; ?>
        <jdoc:include type="modules" name="Navigation" />
    
    </header>
    <div class="off-canvas-content">
        <main>
            <jdoc:include type="message" />
            <jdoc:include type="modules" name="AboveMain" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="AboveFooter" />
        </main>
        <footer>
            
            <jdoc:include type="modules" name="Footer" />
        </footer>
    </div>
 <script  src="<?php echo $path; ?>js/jquery-3.3.1.min.js"></script>
 <script src="<?php echo $path; ?>js/foundation.min.js"></script>
 <script  src="<?php echo $path; ?>js/foundation.util.keyboard.js"></script>
 <script  src="<?php echo $path; ?>js/foundation.util.mediaQuery.js"></script>
 <script  src="<?php echo $path; ?>js/foundation.util.triggers.js"></script>
 <script src="<?php echo $path; ?>js/foundation.offcanvas.js"></script>
 <script src="<?php echo $path; ?>js/foundation.orbit.js"></script>
 <script>
 $(document).foundation();
 </script>

</body>

</html>