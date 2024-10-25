# Webbserverprogrammering 1 - Inloggningssystem

Detta projekt är en del av kursen "Webbserverprogrammering 1" och består av en enkel webbplats med flersidiga vyer samt ett inloggningssystem. Huvudfokus är att skapa en webbplats där användaren kan logga in för att få tillgång till specifika sidor och funktioner. Projektet är byggt med PHP.

## Funktioner

- **Inloggningssystem**: Användaren kan logga in med ett korrekt användarnamn och lösenord (admin, 12345). Efter inloggning får användaren tillgång till särskilda sidor och innehåll som annars är dolda.
- **Sessionhantering**: PHP:s `$_SESSION` används för att lagra användarens inloggningsstatus, vilket gör det möjligt att visa olika innehåll beroende på om användaren är inloggad eller ej.

## Inloggningsfunktion

Inloggningssystemet är huvuddelen av projektet och den består av:

1. **Inloggningsformulär**: 
   - Användaren möts av ett enkelt formulär där de kan fylla i sitt användarnamn och lösenord.

   - Man kan därefter logga in med två olika användare
  
   emrik:
   - **Användarnamn**: `emrik`
   - **Lösenord**: `54321`

   Admin:
   - **Användarnamn**: `admin`
   - **Lösenord**: `12345`

2. **Sessionsbaserad inloggning**:
   - När användaren loggar in kontrolleras om deras uppgifter stämmer via en enkel PHP-omfattning.
   - Vid korrekta inloggningsuppgifter sätts sessionen `$_SESSION['inLoggad'] = true`, vilket möjliggör tillgång till skyddat innehåll.

## Webbsidornas Struktur

- `index.php`: Huvudfilen för att inkludera olika sidor och hantera menyval.
  
- `pages/blogg.php`: Visar en bloggsektion där en inloggad användare kan läsa inlägg.
- `pages/bilder.php`: Visar ett bildgalleri för inloggade användare.
- `pages/kontakt.php`: Innehåller ett kontaktformulär för inloggade användare att skicka meddelanden.
  
- `inc/header.php`, 
- `inc/footer.php`: Återanvändbara sidhuvuden och sidfötter för en konsekvent layout.
- `inc/meny.php`: Navigeringsmeny som länkar till webbplatsens olika sidor.
- `inc/login.php`: Login komponent, återanvändbar. Innehåller även logout knappen.
- `inc/logout.php`: Innehåller bara logiken bakom utloggningen
