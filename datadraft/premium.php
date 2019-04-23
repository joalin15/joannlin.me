<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(TEMPLATES_PATH . "/head-tag-contents.php");?>
</head>
<body>

	<?php include(TEMPLATES_PATH . "/navigation.php");?>

	<div id="main-content">
    <div class="container" id="main-content">
      <div id="premium-banner">
        <div class="container">
          <h2 class="text">Data Draft Premium</h2>
        </div>
      </div>
      <div id="premium-content" class="container">
        <div class="pricing-table-container">
          <table>
            <tr>
              <td></td>
              <td><span class="header">Premium</span></td>
              <td><span class="header">Super Premium</span></td>
            </tr>
            <tr>
              <td><span class="header">Monthly Subscription</span></td>
              <td>$10/month</td>
              <td>$15/month</td>
            </tr>
            <tr>
              <td><span class="header">Annual Subscription</span></td>
              <td>$100/year</td>
              <td>$120/year</td>
            </tr>
            <tr>
              <td><span class="header">Benefits</span></td>
              <td style="text-align: left;">
                <ul>
                  <li>Access to analytics based on standard data</li>
                  <li>Rankings calculations</li>
                  <li>Predictions</li>
                </ul>
              </td>
              <td style="text-align: left;">
                <ul>
                  <li>Everything in Premium</li>
                  <li>Access to analytics based on spacial tracking data</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td><span class="header">User Badge</span></td>
              <td><img src="<?php echo($config['paths']['images']) ?>/basketball_premium.png"/></td>
              <td><img src="<?php echo($config['paths']['images']) ?>/basketball_super_premium.png"/></td>
            </tr>
          </table>
        </div>
      </div>
	</div>

</body>
</html>
