Creazione di un progetto Laravel 11 per la gestione di semplici eventi.

L'applicazione è composta da 2 modelli: Evento e Persona. 

Una persona può partecipare ad un solo evento ma un evento può avere più partecipanti.

Una Persona ha un nome ed un cognome.
Un Evento ha un nome e una data.

L'applicazione permette di:
	•	vedere la lista degli eventi in home page 
	•	vedere una pagina di dettaglio per ogni evento 
	•	creare una persona  
    •   editare le persone
	•	creare gli eventi
    •   editare gli eventi
	•	aggiungere / rimuovere persone dagli eventi

Il database di riferimento è sqlite3 di (default di Laravel)


L'applicazione è stata sviluppata tenendo conto delle "Best Practices" di Laravel, ossia quell'insieme di norme che permette al codice di essere pulito, in ordine e facilmente mantenibile. Ad esempio: i controller sono denominati in CamelCase ed Eloquent è stato utilizzato per eseguire query in modo chiaro e intuitivo.