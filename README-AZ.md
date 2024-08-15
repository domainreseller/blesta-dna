<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Domainnameapi Modulu

Bu modul, Blesta üçün inkişaf etdirilmiş 'domainnameapi.com' inteqrasiyasıdır. (Yenilənmə 15 Avqust 2024)

## Tələblər

- Blesta'nın 5.3 və yuxarı versiyası tələb olunur.
- PHP-nin 7.4 və yuxarı versiyası tələb olunur.
- PHP Soap əlavəsi aktivləşdirilməlidir.

## Quraşdırma

Yüklədiyiniz faylları blesta/components/modules/domainnameapi/ yerləşdirin.
Parametrlər > Modullar menyusundan aktivləşdirin.


## Qayıdış və Səhv Kodları, Təfərrüatları

| Kod  | Açıqlama                                        | Təfərrüat                                                                                                                                                                      |
|------|-------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Əmr uğurla icra edildi                                                                                                                                                         |
| 1001 | Command completed successfully; action pending. | Əmr uğurla icra edildi; amal gözlənilir                                                                                                                                        |
| 2003 | Required parameter missing                      | Tələb olunan parametr yoxdur. Məsələn; Əlaqə məlumatlarında telefon qeyd edilməməsi                                                                                            |
| 2105 | Object is not eligible for renewal              | Nəqliyyat yenilənməyə layiq deyil, yeniləmə əməliyyatları qapalıdır. "clientupdateprohibited" vəziyyət durumu olmamalıdır. Digər vəziyyət durumlarından səbəb götürə bilər     |
| 2200 | Authentication error                            | Doğrulama səhvi, təhlükəsizlik kodu yanlışdır və ya domen başqa bir qeydiyyat şirkətində mövcuddur                                                                             |
| 2302 | Object exists                                   | Domen adı və ya ad server məlumatları verilənlər bazasında mövcuddur. Qeydiyyat edilə bilməz                                                                                   |
| 2303 | Object does not exist                           | Domen adı və ya ad server məlumatları verilənlər bazasında mövcud deyil. Yeni qeydiyyat yaradılmalıdır                                                                         |
| 2304 | Object status prohibits operation               | Domen vəziyyəti əməliyyat üçün maneə törədir, yeniləmə əməliyyatları qapalıdır. Vəziyyət "clientupdateprohibited" olmamalıdır. Digər vəziyyət durumlarından səbəb götürə bilər |
