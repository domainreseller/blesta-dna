<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>


# Domainnameapi Module

Deze module is een integratie van 'domainnameapi.com' ontwikkeld voor Blesta. (Bijgewerkt op 15 augustus 2024)

## Vereisten

- Blesta versie 5.3 of hoger is vereist.
- PHP versie 7.4 of hoger is vereist.
- De PHP Soap-extensie moet zijn ingeschakeld.

## Installatie

* Kopieer de gedownloade bestanden naar blesta/components/modules/domainnameapi/.
* Activeer het vanuit het menu Instellingen > Modules.


<img src="https://github.com/user-attachments/assets/4d72c16e-8f6f-4a07-acc0-ebe7bf5684c4">
<img src="https://github.com/user-attachments/assets/d0ebc402-af3d-4768-8adb-1705cf7c0a67">
<img src="https://github.com/user-attachments/assets/0d6a129f-7cc2-47f6-88a0-aec35e88c5de">
<img src="https://github.com/user-attachments/assets/b6534408-ef8f-4911-a158-bd644dc113f1">
<img src="https://github.com/user-attachments/assets/411afcc4-ecd8-4e2d-a74c-bb9422abd783">


## Terugkeer- en Foutcodes met Uitleg

| Code | Uitleg                                          | Details                                                                                                                                                                     |
|------|-------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Opdracht succesvol uitgevoerd                                                                                                                                               |
| 1001 | Command completed successfully; action pending. | Opdracht succesvol uitgevoerd; actie in behandeling                                                                                                                         |
| 2003 | Required parameter missing                      | Vereiste parameter ontbreekt. Bijvoorbeeld: Ontbrekend telefoonnummer in contactgegevens                                                                                    |
| 2105 | Object is not eligible for renewal              | Object komt niet in aanmerking voor vernieuwing, update-acties vergrendeld. Status mag niet "clientupdateprohibited" zijn. Kan te wijten zijn aan andere statusvoorwaarden. |
| 2200 | Authentication error                            | Authenticatiefout, autorisatiecode onjuist of domein is geregistreerd bij een andere registrar.                                                                             |
| 2302 | Object exists                                   | Domeinnaam of nameserver-informatie bestaat al in de database. Kan niet worden geregistreerd.                                                                               |
| 2303 | Object does not exist                           | Domeinnaam of nameserver-informatie bestaat niet in de database. Nieuwe registratie vereist.                                                                                |
| 2304 | Object status prohibits operation               | Objectstatus verbiedt de actie, updates vergrendeld. Status mag niet "clientupdateprohibited" zijn. Kan te wijten zijn aan andere statusvoorwaarden.                        |
