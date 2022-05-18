# User Guide für das Plugin Verifone ZVT

Mit dem Plugin Verifone ZVT verbindest du ein stationäres Terminal mit Drucker des Geräteherstellers Verifone über das ZVT-Protokoll mit der Kassensoftware plentyPOS.

Um das Verifone-Gerät mit plentyPOS nutzen zu können, benötigst du:

* Verifone-Terminal mit Drucker, Betriebsart **ZVT**, Verbindungsart **TCP/IP**, Blockdruck **Ein** <br />
    <b><i>Tipp:</i><b> Informationen zu den Geräten, die plentymarkets mit diesem Plugin getestet hat, findest du im [plentymarkets Handbuch](https://knowledge.plentymarkets.com/de-de/manual/main/app/installieren.html#400).
* Service-Vertrag mit einem Payment Provider
* plentyPOS Kasse
* Mobiles Gerät, auf dem die plentymarkets App installiert ist

<div class="alert alert-warning" role="alert">
    Um das Gerät mit plentyPOS zu verbinden, benötigst du die <b>Terminal-IP</b> und den <b>Port</b> des Verifone-Terminals. Diese Gerätedaten sind nur nach Eingabe des Techniker-/Service-Passworts auf dem Gerät zugänglich. Teile daher Ihrem Payment Provider rechtzeitig mit, dass du diese Daten benötigst, um das Terminal mit deiner Kassensoftware zu verbinden.
</div>

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von plentyPOS findest du im [plentymarkets Handbuch](https://knowledge.plentymarkets.com/de-de/manual/main/pos/pos-einrichten.html#10).

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem du das Payment-Plugin installiert und bereitgestellt hast, aktiviere die Zahlungsart im plentymarkets Backend, damit über das Verifone-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart Verifone (ZVT) für POS aktivieren:

1. Öffne das Menü **Einstellungen » Mandant (Shop) » Standard » POS » Tab: Zahlungsart**.
2. Wähle für die Option **Anbindung** die Einstellung **Verifone (ZVT)**.<br />
    <b><i>Tipp:</i></b> Wenn die Option **Verifone (ZVT)** nicht verfügbar ist, wurde das Plugin noch nicht bereitgestellt.
3. **Speichere** die Einstellungen.<br />
→ Die Zahlungsart ist aktiv.

## Terminal mit der Kasse verbinden

Die Verbindung zwischen Terminal und Kasse stellst du über die plentymarkets App her. Du benötigst die Terminal-IP und den Port des Terminals, um die Verbindung herzustellen.

##### Terminal mit der Kasse verbinden:

1. Öffne das Menü **plentymarkets App » Einstellungen » POS**.
2. Nimm die Einstellungen vor. Beachte Tabelle 1. <br />
    <b><i>Hinweis:</i></b> Wenn dasselbe Terminal an mehr als eine Kasse angebunden werden soll, müssen für alle Kassen dieselben Einstellungen getroffen werden.
3. **Speichere** die Einstellungen.
4. Tippe auf **Terminal-Verbindung testen**, um die Verbindung zu prüfen.

<table>
<caption>Tab. 1: ZVT-Terminal verbinden</caption>
<thead>
<th>Einstellung</th>
<th>Erläuterung</th>
</thead>
<tbody>
<tr>
<td><b>Terminal-IP</b></td>
<td>IP des Verifone-Kartenterminals eingeben. <br />
<b><i>Tipp:</i></b> Die IP ist nach Eingabe des Techniker-/Service-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td><b>Port</b></td>
<td>Port des Verifone-Kartenterminals eingeben.<br />
<b><i>Tipp:</i></b> Der Port ist nach Eingabe des Techniker-/Service-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td><b>Terminal-Belege auf Terminal drucken</b></td>
<td>Aktivieren, um Belege für Kartenzahlungen und Verifone-Tagesberichte auf dem Drucker des Karten-Terminals zu drucken. Wenn die Option nicht aktiviert ist, werden die Terminal-Belege auf dem Belegdrucker der Kasse gedruckt. <br />
<b><i>Hinweis:</i></b> Wenn Belege für Kartenzahlungen und Verifone-Tagesberichte auf dem Belegdrucker der Kasse gedruckt werden sollen, muss in den Betriebsartoptionen des Terminals die Option <b>Blockdruck</b> auf <b>Ein</b> gestellt werden. Diese Einstellung kann erst vorgenommen werden, nachdem das Techniker-/Service-Passwort eingegeben wurde.</td>
</tr>
<tr>
<td><b>Auftragspositionen auf Händlerbeleg ausgeben</b></td>
<td>Aktivieren, um die Positionen des Auftrags auf dem Händlerbeleg darzustellen.<br />
<b><i>Tipp:</i></b> Diese Einstellung greift nur, wenn die Option <b>Terminal-Belege auf Terminal drucken</b> nicht aktiviert ist.</td>
</tr>
<tr>
<td><b>Quittungsnr. auf Händlerbeleg ausgeben</b></td>
<td>Aktivieren, um die plentymarkets Belegnummer des Auftrags auf dem Händlerbeleg darzustellen.<br />
<b><i>Tipp:</i></b> Diese Einstellung greift nur, wenn die Option <b>Terminal-Belege auf Terminal drucken</b> nicht aktiviert ist.</td>
</tr>
<tr>
<td><b>Terminal-Verbindung testen</b></td>
<td>Testet, ob die Verbindung zum Karten-Terminal hergestellt werden kann.</td>
</tr>
</tbody>
</table>

## Tagesabschluss/Kassenschnitt durchführen

Der Tagesabschluss heißt bei Verifone Kassenschnitt. Mit dem ZVT-Kassenschnitt werden alle im Terminal gespeicherten Kartenumsätze an den Netzbetreiber übertragen (Clearing). Weitere Informationen zum Terminal-Kassenschnitt findest du im Handbuch des Verifone-Geräts. Über plentyPOS kannst du den Verifone-Kassenschnitt auch gleichzeitig mit dem plentyPOS Tagesabschluss anstoßen. Gehe dazu wie folgt vor:

##### plentyPOS Tagesabschluss und Verifone-Kassenschnitt gleichzeitig erstellen:

1. Tippe im POS-Menü auf **Tagesabschluss**. <br />
→ Der Soll-Kassenbestand wird eingeblendet.
2. Prüfe den tatsächlichen Kassenbestand und gib diesen Ist-Bestand ein.
3. Tippe bei **Gleichzeitig Tagesabschluss für Terminal erstellen?** auf **Ja**. <br />
→ Der plentyPOS Tagesabschluss wird in plentymarkets importiert und im Menü **Aufträge » Dokumentenarchiv** gespeichert. <br />
→ Die Kartenumsätze werden an den Netzbetreiber übertragen. <br />
→ Der Kassenschnittbeleg des Terminals wird gedruckt. <br />
→ Der Umsatzspeicher im Terminal wird auf Null gesetzt.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen findest du in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
