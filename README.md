# Neapolis - Project Work

**Tecnologie Software per il Web**  
**Università degli Studi di Salerno**  
**Dipartimento di Ingegneria dell’Informazione ed Elettrica e Matematica Applicata**  
**Corso di Laurea in Ingegneria Informatica**  
**Canale A-H**  
**Anno accademico 2021-2022**  

---

## Gruppo 04

| Cognome e Nome | Matricola | E-mail |
|:--------------:|:---------:|:------:|
| Alfieri Alessandro | 0612704766 | a.alfieri32@studenti.unisa.it |
| Ciancio Vittorio | 0612704825 | v.ciancio2@studenti.unisa.it |
| Cuomo Ferdinando | 0612704742 | f.cuomo35@studenti.unisa.it |
| Di Maio Marco | 0612704713 | m.dimaio39@studenti.unisa.it |

---

# 1 - Descrizione della realtà d’interesse

Il tema assegnatoci verte su di un sito web atto a descrivere le attrazioni turistiche di una città.  
Abbiamo incentrato il nostro sito web sulla descrizione delle attrazioni della città di Napoli, focalizzandoci sulla posizione, sulle tariffe e sugli orari delle visite per ciascuna di essa.  
Il sito è caratterizzato da una homepage contenente alcune delle principali attrazioni visitabili, brevemente descritte in delle “card”; all’interno delle stesse sono presenti ulteriori informazioni riguardanti l’attrazione, le recensioni lasciate dall’utente e la possibilità di lasciare nuove recensioni solo dagli utenti registrati.

### Limitazioni:
- Non presenta tutte le possibili attrazioni visitabili dell’intera città di Napoli.
- L’utente loggato non ha la possibilità di cancellare/modificare eventuali commenti una volta pubblicati.
- L’utente non ha la possibilità di modificare l’username.

---

# 2 - Progettazione

Per la gestione dei dati lato server è stato utilizzato il DBMS PostgreSQL. È stato creato un database chiamato `TSW` (user: `www`, password: `tsw2022`) contenente sette tabelle:

- account
- cristovelato
- musarcheologico
- napolisott
- palazzo
- sangennaro
- santachiara

### Tabelle:
- **account**: dati utenti (id, nome, cognome, username, e-mail, password).
- **Attrazioni** (cristovelato, musarcheologico, napolisott, palazzo, sangennaro, santachiara): recensioni (id, commento, data, nome utente, stelle).

### Struttura pagine web:

**Header:**  
Due versioni in base allo stato utente (loggato/non loggato):
- Logo "Neapolis" a sinistra.
- Bottoni "Accedi"/"Registrati" o "Account"/"Logout" a destra.

Pagine collegate:
- Accedi ➔ `login.php`
- Registrati ➔ `registrati.php`
- Account ➔ `account.php`
- Logout ➔ `logout.php`

**Footer:**  
Due versioni:
- Homepage/Attrazioni ➔ Logo + info gruppo + "Torna alla home".
- Altre pagine ➔ Solo info gruppo + "Torna alla home".

---

# 3 - Descrizione pagine visitabili

Il sito è composto da 17 pagine:

## Homepage
- Fotogallery in background.
- Scritta "Napoli" centrale.
- Descrizione della città.
- Card delle attrazioni.
- Footer.

**Screenshot:**  
![Homepage non loggato](images/image_1.png)  
![Homepage loggato](images/image_2.png)  
![Homepage 2](images/image_3.png)  
![Homepage 3](images/image_4.png)

## Accedi
- Sfondo lungomare di Napoli.
- Form Email + Password.
- Link a Registrazione.
- Bottone azzurro "Accedi".
- Validazioni JavaScript (`login.js`) e PHP.

**Screenshot:**  
![Login](images/image_5.png)

## Registrati
- Sfondo lungomare.
- Form Nome, Cognome, Username, E-mail, Password, Conferma password.
- Checkbox consenso dati personali.
- Link ad Accedi.
- Bottone azzurro "Registrati".
- Validazioni JavaScript (`reg-edit.js`) e PHP.

**Screenshot:**  
![Registrazione](images/image_6.png)

## Account
- Sfondo ritratto di San Gennaro (Jorit).
- Visualizzazione Nome, Cognome, E-mail, Username.
- Bottoni "Modifica" e "Cancella" account.

**Screenshot:**  
![Account](images/image_7.png)

## Modifica contatto
- Sfondo lungomare.
- Form per modificare i dati.
- Bottone "Modifica".
- Validazioni JavaScript (`reg-edit.js`) e PHP.

**Screenshot:**  
![Modifica contatto](images/image_8.png)

## Singola attrazione
- Fotogallery attrazione.
- Descrizione attrazione.
- Orari, tariffe, mezzi di trasporto.
- Google Maps dinamica.
- Tabella recensioni + bottone "Lascia una recensione".
- Card delle altre attrazioni.

**Screenshot (Cristo Velato esempio):**  
![Attrazione 1](images/image_9.png)  
![Attrazione 2](images/image_10.png)  
![Attrazione 3](images/image_11.png)  
![Attrazione 4](images/image_12.png)  
![Attrazione 5](images/image_13.png)  
![Attrazione 6](images/image_14.png)

## Scrittura recensione
- Sfondo immagine sfocata dell’attrazione.
- Cinque stelle cliccabili.
- Box commento.
- Bottone azzurro "Invia".
- Avviso: "Il commento non potrà essere cancellato né modificato".

**Screenshot:**  
![Scrivi recensione](images/image_15.png)

---

# 4 - Dettagli implementativi

- **Sessioni:** attive su tutte le pagine.
- **Cookie:** creati alla login, durata 6 ore (nome, cognome, e-mail, username, flag sessione).
- **Controlli accesso:** redirect a homepage se tentato accesso senza login.
- **Gestione utenti:** distinti anonimi e loggati.
- **Password:** livelli di sicurezza durante registrazione, hash salvato nel database.

### File PHP principali
- `db.php`: connessione a PostgreSQL.
- `login-manager.php`: gestione login, creazione cookie e sessione.
- `logout.php`: distruzione sessione e cookie.
- `salva.php`: salvataggio recensione.

### Librerie esterne
- Google Fonts.

---

# 5 - Screenshot del sito

Sono allegati gli screenshot principali del sito nelle sezioni sopra riportate.

---