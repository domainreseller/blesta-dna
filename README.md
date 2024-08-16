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

<img width="1507" alt="Screenshot at Aug 16 19-42-38" src="https://github.com/user-attachments/assets/0d6a129f-7cc2-47f6-88a0-aec35e88c5de">
<img width="1530" alt="Screenshot at Aug 16 19-40-35" src="https://github.com/user-attachments/assets/b6534408-ef8f-4911-a158-bd644dc113f1">
<img width="1206" alt="Screenshot at Aug 16 19-30-27" src="https://github.com/user-attachments/assets/411afcc4-ecd8-4e2d-a74c-bb9422abd783">
<img width="1532" alt="Screenshot at Aug 16 19-29-33" src="https://github.com/user-attachments/assets/d0ebc402-af3d-4768-8adb-1705cf7c0a67">
<img width="1535" alt="Screenshot at Aug 16 19-28-17" src="https://github.com/user-attachments/assets/4d72c16e-8f6f-4a07-acc0-ebe7bf5684c4">


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

