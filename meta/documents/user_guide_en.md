# User guide for the Verifone ZVT plugin

The Verifone ZVT plugin allows you to connect a stationary payment terminal with printer by the device manufacturer Verifone with the POS software for PlentyONE using the ZVT protocol.

To use the Verifone device with PlentyONE POS, you need the following:

* Verifone terminal with printer, operating mode **ZVT**, connection type **TCP/IP**, bock print **Ein** (**On**) <br />
  <b><i>Tip:</i></b> Check the [PlentyONE manual](https://knowledge.plentymarkets.com/en-gb/manual/main/app/installation.html#400) to find the devices that PlentyONE tests this plugin on.
* Service contract with a payment provider
* PlentyONE POS
* Mobile device on which the POS app is installed

<div class="alert alert-warning" role="alert">
  To connect the terminal with the PlentyONE POS, you need the <b>Terminal IP</b> and the <b>port</b> of the Verifone terminal. This information only can be accessed by entering the technical support password on the device. As such, let your payment provider know early on that you need this information to connect the device to your POS software.
</div>

Check the [PlentyONE manual](https://knowledge.plentymarkets.com/en-gb/manual/main/pos/integrating-plentymarkets-pos.html#10) for further information on hardware requirements and setting up plenty POS.

<div class="container-toc"></div>

## Activating the payment method for a POS

Once you have installed and provisioned the payment plugin, activate the payment method in the PlentyONE back end to make sure that POS orders are processed correctly.

##### Activating the payment method Verifone (ZVT) for a POS:

1. Go to **Setup » POS » Client (store) » POS » Tab: Payment method**.
2. For the option **Connectivity**, select the setting **Verifone (ZVT)**. <br />
  <b><i>Tip:</i></b> If the option **Verifone (ZVT)** is not shown, you need to provision the plugin to continue.
3. **Save** the settings. <br /> 
→ The payment method is active.

## Connecting the payment terminal with a POS

The connection between the payment terminal and the POS is established in the POS app. You also need the terminal IP and the port of the payment terminal to establish the connection.

##### Connecting the payment terminal with a POS:

1. Go to **POS App » Settings » POS**.
2. Carry out the settings. Pay attention to the information given in table 1. <br />
  <b><i>Note:</i></b> To connect the same terminal to more than one POS,  you need to select the same settings for all these POS.
3. **Save** the settings.
4. Tap on **Test terminal connection** to check if the connection can be established.

<table>
<caption>Table 1: Connecting the ZVT terminal</caption>
<thead>
<th>Setting</th>
<th>Explanation</th>
</thead>
<tbody>
<tr>
<td><b>Terminal IP</b></td>
<td>Enter the IP of the Verifone card terminal. <br /> <b><i>Tip:</i></b> The IP can be accessed by entering the technical support password on the device.</td>
</tr>
<tr>
<td><b>Port</b></td>
<td>Enter the port of the Verifone card terminal.<br /> <b><i>Tip:</i></b> The Port can be accessed by entering the technical support password on the device.</td>
</tr>
<tr>
<td><b>Print terminal receipts on terminal</b></td>
<td>Activate to print receipts for card payments and Verifone z reports on the card terminal's printer. If you do not activate this option, terminal receipts are printed on the receipt printer connected to the POS. <br />
<b><i>Note:</i></b> To print receipts for card payments and Verifone z reports on the POS receipt printer, you need to set the operating mode option <b>Block print</b> to <b>Ein</b> (<b>On</b>). This setting requires entering the device's technical support password.</td>
</tr>
<tr>
<td><b>Include order items on merchant receipt</b></td>
<td>Activate to print items of the order on the seller receipt.<br /> <b><i>Tip:</i></b> This setting is only available if the option <b>Print terminal receipts on terminal</b> is not activated.</td>
</tr>
<tr>
<td><b>Include POS receipt no. on merchant receipt</b></td>
<td>Activate to print the POS receipt number on the seller receipt.<br />
<b><i>Tip:</i></b> This setting is only available if the option <b>Print terminal receipts on terminal</b> is not activated.</td>
</tr>
<tr>
<td><b>Test terminal connection</b></td>
<td>Tests if the connection to the card terminal can be established.</td>
</tr>
</tbody>
</table>

## Creating a z report

Z reports are called z totals on your Verifone device. A z total transmits all card revenues saved on the terminal to the payment provider (clearing). For further information on z totals, refer to the user guide of your Verifone device. Instead of creating separate z totals, you can also trigger the Verifone z total at the same time as you trigger the z report in POS. To do so, proceed as described below:

##### Creating both POS z report and payment terminal z report:

1. Tap on **Z report** in the POS menu. <br />
→ The expected amount of cash on hand is displayed.
2. Count the actual cash on hand and enter this amount.
3. Tap on **Yes** for **Also create z report for terminal?**. <br />
→ The POS z report is imported to PlentyONE and saved in the **Orders » Document archive** menu. <br />
→ The card revenues are transmitted to the payment provider. <br />
→ The Z total for the terminal is printed. <br />
→ The terminal's revenue counter is reset to zero.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
