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

This module is an integration of 'domainnameapi.com' developed for Blesta. (Updated on August 15, 2024)

## Requirements

- Blesta version 5.3 or above is required.
- PHP version 7.4 or above is required.
- PHP Soap extension must be enabled.

## Installation

Copy the downloaded files to blesta/components/modules/domainnameapi/.
Activate it from the Settings > Modules menu.



## Return and Error Codes with Explanations

| Code | Explanation                                     | Details                                                                                                                                        |
|------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Command completed successfully                                                                                                                 |
| 1001 | Command completed successfully; action pending. | Command completed successfully; action pending                                                                                                 |
| 2003 | Required parameter missing                      | Required parameter missing. For example: Missing phone number in contact information                                                           |
| 2105 | Object is not eligible for renewal              | Object is not eligible for renewal, update actions locked. Status must not be "clientupdateprohibited". May be due to other status conditions. |
| 2200 | Authentication error                            | Authentication error, authorization code incorrect, or domain is registered with another registrar.                                            |
| 2302 | Object exists                                   | Domain name or nameserver information already exists in the database. Cannot be registered.                                                    |
| 2303 | Object does not exist                           | Domain name or nameserver information does not exist in the database. New registration required.                                               |
| 2304 | Object status prohibits operation               | Object status prohibits the action, updates locked. Status must not be "clientupdateprohibited". May be due to other status conditions.        |

