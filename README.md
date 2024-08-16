<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Domainnameapi Modülü 

Bu modül, Blesta için geliştirilmiş bir 'domainnameapi.com' entegrasyonudur. (Güncelleme 15 Ağustos 2024)

## Gereksinimler

- Blesta'nin 5.3 ve üzeri sürümü gerekmektedir.
- PHP'nin 7.4 ve üzeri sürümü gerekmektedir.
- PHP Soap eklentisi etkinleştirilmelidir.

## Kurulum

* İndirdiğiniz dosyaları blesta/components/modules/domainnameapi/
* Ayarlar>Modüller menüsünden aktifleştirin.

## Dönüş ve Hata Kodları ile Açıklamaları

| Kod  | Açıklama                                        | Detay                                                                                                                                                                         |
|------|-------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | İşlem başarılı.                                                                                                                                                               |
| 1001 | Command completed successfully; action pending. | İşlem başarılı. Fakat işlem şu an tamamlanmak için kuyruğa alındı.                                                                                                            |
| 2003 | Required parameter missing                      | Parametre eksik hatası. Örneğin; Kontak bilgisinde telefon girişi yapılmaması.                                                                                                |
| 2105 | Object is not eligible for renewal              | Domain durumu yenilemeye müsait değil, güncelleme işlemlerine kilitlenmiştir. Durum durumu "clientupdateprohibited" olmamalı. Diğer durum durumlarından kaynaklanabilir.      |
| 2200 | Authentication error                            | Yetki hatası, güvenlik kodu hatalı veya domain başka bir kayıt firmasında bulunuyor.                                                                                          |
| 2302 | Object exists                                   | Domain adı veya name server bilgisi veritabanında mevcut. Kayıt edilemez.                                                                                                     |
| 2303 | Object does not exist                           | Domain adı veya name server bilgisi veritabanında mevcut değil. Yeni kayıt oluşturulmalı.                                                                                     |
| 2304 | Object status prohibits operation               | Domain durumu güncellemeye müsait değildir, güncelleme işlemlerine kilitlenmiştir. Durum durumu "clientupdateprohibited" olmamalı. Diğer durum durumlarından kaynaklanabilir. |

