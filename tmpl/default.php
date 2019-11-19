  
<?php
/**
 * @package    MOD_CALLNOW
 *
 * @author     Ryan Behague <support@isonic.net.au>
 * @copyright  2019
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       isonic.net.au
 */

defined('_JEXEC') or die;
// Access to module parameters
$phone = $params->get('phone');
$color = $params->get('colour');
$showondesktop = $params->get('showondesktop');
$showontablet = $params->get('showontablet');
$showonmobile = $params->get('showonmobile');
?>
<a href="tel:<?= $phone ?>" id="callnowbutton"><span class="NoButtonText">Call Now Button</span></a>

<style>
#callnowbutton {
    display: block;
    position: fixed;
    text-decoration: none;
    z-index: 2147483647;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    bottom: 15px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transform: scale(1);
    right: 20px;
    background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjAgNjAiPjxwYXRoIGQ9Ik03LjEwNCAxNC4wMzJsMTUuNTg2IDEuOTg0YzAgMC0wLjAxOSAwLjUgMCAwLjk1M2MwLjAyOSAwLjc1Ni0wLjI2IDEuNTM0LTAuODA5IDIuMSBsLTQuNzQgNC43NDJjMi4zNjEgMy4zIDE2LjUgMTcuNCAxOS44IDE5LjhsMTYuODEzIDEuMTQxYzAgMCAwIDAuNCAwIDEuMSBjLTAuMDAyIDAuNDc5LTAuMTc2IDAuOTUzLTAuNTQ5IDEuMzI3bC02LjUwNCA2LjUwNWMwIDAtMTEuMjYxIDAuOTg4LTI1LjkyNS0xMy42NzRDNi4xMTcgMjUuMyA3LjEgMTQgNy4xIDE0IiBmaWxsPSIjMDA2NzAwIi8+PHBhdGggZD0iTTcuMTA0IDEzLjAzMmw2LjUwNC02LjUwNWMwLjg5Ni0wLjg5NSAyLjMzNC0wLjY3OCAzLjEgMC4zNWw1LjU2MyA3LjggYzAuNzM4IDEgMC41IDIuNTMxLTAuMzYgMy40MjZsLTQuNzQgNC43NDJjMi4zNjEgMy4zIDUuMyA2LjkgOS4xIDEwLjY5OWMzLjg0MiAzLjggNy40IDYuNyAxMC43IDkuMSBsNC43NC00Ljc0MmMwLjg5Ny0wLjg5NSAyLjQ3MS0xLjAyNiAzLjQ5OC0wLjI4OWw3LjY0NiA1LjQ1NWMxLjAyNSAwLjcgMS4zIDIuMiAwLjQgMy4xMDVsLTYuNTA0IDYuNSBjMCAwLTExLjI2MiAwLjk4OC0yNS45MjUtMTMuNjc0QzYuMTE3IDI0LjMgNy4xIDEzIDcuMSAxMyIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==) center/50px 50px no-repeat <?= $color ?>;
}
#callnowbutton {
    border-top: 1px solid #4f9c8a !important;
    border-bottom: 1px solid #3f8876!important;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4)!important;
}
#callnowbutton .NoButtonText {
    display: none;
}

<?php if ($showonmobile == 0 ) : ?>
/* Smartphones */
@media (max-width: 480px) { 
    #callnowbutton {
        display: none;
    }
}
/* Smartphones to Tablets */
@media (min-width: 481px) and (max-width: 767px) { 
    #callnowbutton {
        display: none;
    }
}
<?php endif; ?>

<?php if ($showontablet == 0 ) : ?>
/* Tablets */
@media (min-width: 768px) and (max-width: 959px) { 
    #callnowbutton {
        display: none;
    }
}
@media (min-width: 960px) and (max-width: 1199px) { 
    #callnowbutton {
        display: none;
    }
}
<?php endif; ?>

<?php if ($showondesktop == 0 ) : ?>
/* Large Display */
@media (min-width: 1200px) { 
    #callnowbutton {
        display: none;
    }
}
<?php endif; ?>
</style>
