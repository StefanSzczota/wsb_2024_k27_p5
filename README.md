Laravel 11.X 

Każdy nowy użytkownik ma usertype = user, żeby stworzyć admina, trzeba zmienić usertype = admin u konkretnego uzytkownika z poziomu bazy danych. 

Projekt przedstawia projekt strony która prezentuje wybór produktów (bitów) do kupienia. 
Zakup po kontakcie mailowym, takie założenie wynika z tego, że bity można zakupić na róznym poziomie praw autorskich: lease, exclusive itp, a to wiąże się z potrzebą wysłania różnych plików takich jak WAV, STEMY itp zależnie od zakupu (dostępne w programie muzycznym np. Ableton/FL studio). 
Kontakt jest inicjowany przez uzytkownika (user) który dodaje komentarz do bitu z informacją w jakiej formie chce go kupić. Admin ma dostęp do tych komentarzy, widzi kto je zrobił i kiedy. Następnie może już w wiadomościach mailowych dokonczyć proces sprzedaży bitu - wprowadzić zmiany na życzenie klienta itp. 
Gość jedyne co widzi to strone welcome, która prezentuje informacje o projektach muzycznych nad którymi pracował producent (twórca bitów) i zachęca do rejestracji.

Admin funkcje:
-zarządzanie bitami (crud)
-zarządzanie uzytkownikami (crud)
-podglad komentarzy
-wszystkie funkcje usera

User funkcje:
-możliwość edycji swojego profilu
-przeglądanie oferty bitów z możliwością dodania komentarza

Guest funkcje:
-widok strony welcome
-możliwość zalogowania lub rejestracji
