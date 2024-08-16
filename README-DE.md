<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Domainnameapi Modul

Dieses Modul ist eine Integration von 'domainnameapi.com', die für Blesta entwickelt wurde. (Aktualisierung 15. August 2024)

## Anforderungen

- Blesta Version 5.3 oder höher ist erforderlich.
- PHP Version 7.4 oder höher ist erforderlich.
- Die PHP Soap-Erweiterung muss aktiviert sein.

## Installation

* Kopieren Sie die heruntergeladenen Dateien nach blesta/components/modules/domainnameapi/.
* Aktivieren Sie es über das Menü Einstellungen > Module.

<img src="https://github.com/user-attachments/assets/4d72c16e-8f6f-4a07-acc0-ebe7bf5684c4">
<img src="https://github.com/user-attachments/assets/d0ebc402-af3d-4768-8adb-1705cf7c0a67">
<img src="https://github.com/user-attachments/assets/0d6a129f-7cc2-47f6-88a0-aec35e88c5de">
<img src="https://github.com/user-attachments/assets/b6534408-ef8f-4911-a158-bd644dc113f1">
<img src="https://github.com/user-attachments/assets/411afcc4-ecd8-4e2d-a74c-bb9422abd783">

## Rückgabe- und Fehlercodes mit Erklärungen

| Code | Erklärung                                       | Details                                                                                                                                                                         |
|------|-------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Befehl erfolgreich ausgeführt                                                                                                                                                   |
| 1001 | Command completed successfully; action pending. | Befehl erfolgreich ausgeführt; Aktion ausstehend                                                                                                                                |
| 2003 | Required parameter missing                      | Erforderlicher Parameter fehlt. Zum Beispiel: Telefonnummer in den Kontaktdaten fehlt                                                                                           |
| 2105 | Object is not eligible for renewal              | Objekt ist nicht zur Verlängerung berechtigt, Update-Aktionen gesperrt. Der Status darf nicht "clientupdateprohibited" sein. Möglicherweise aufgrund anderer Statusbedingungen. |
| 2200 | Authentication error                            | Authentifizierungsfehler, Berechtigungscode ungültig oder Domain ist bei einem anderen Registrar registriert.                                                                   |
| 2302 | Object exists                                   | Domänenname oder Nameserver-Informationen sind bereits in der Datenbank vorhanden. Kann nicht registriert werden.                                                               |
| 2303 | Object does not exist                           | Domänenname oder Nameserver-Informationen sind in der Datenbank nicht vorhanden. Neue Registrierung erforderlich.                                                               |
| 2304 | Object status prohibits operation               | Objektstatus verbietet die Aktion, Updates gesperrt. Der Status darf nicht "clientupdateprohibited" sein. Möglicherweise aufgrund anderer Statusbedingungen.                    |
