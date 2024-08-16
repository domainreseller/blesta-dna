<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Module Domainnameapi

Ce module est une intégration de 'domainnameapi.com' développée pour Blesta. (Mise à jour le 15 août 2024)

## Exigences

- La version 5.3 ou supérieure de Blesta est requise.
- La version 7.4 ou supérieure de PHP est requise.
- L'extension PHP Soap doit être activée.

## Installation

* Copiez les fichiers téléchargés dans blesta/components/modules/domainnameapi/.
* Activez-le depuis le menu Paramètres > Modules.

## Codes de Retour et d'Erreur avec Explications

| Code | Explication                                     | Détails                                                                                                                                                                                             |
|------|-------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Commande exécutée avec succès                                                                                                                                                                       |
| 1001 | Command completed successfully; action pending. | Commande exécutée avec succès ; action en attente                                                                                                                                                   |
| 2003 | Required parameter missing                      | Paramètre requis manquant. Par exemple : Numéro de téléphone manquant dans les informations de contact                                                                                              |
| 2105 | Object is not eligible for renewal              | L'objet n'est pas éligible pour le renouvellement, les actions de mise à jour sont verrouillées. Le statut ne doit pas être "clientupdateprohibited". Peut être dû à d'autres conditions de statut. |
| 2200 | Authentication error                            | Erreur d'authentification, code d'autorisation incorrect, ou le domaine est enregistré chez un autre registrar.                                                                                     |
| 2302 | Object exists                                   | Le nom de domaine ou les informations de serveur de noms existent déjà dans la base de données. Ne peut pas être enregistré.                                                                        |
| 2303 | Object does not exist                           | Le nom de domaine ou les informations de serveur de noms n'existent pas dans la base de données. Nouvel enregistrement requis.                                                                      |
| 2304 | Object status prohibits operation               | Le statut de l'objet interdit l'action, les mises à jour sont verrouillées. Le statut ne doit pas être "clientupdateprohibited". Peut être dû à d'autres conditions de statut.                      |
