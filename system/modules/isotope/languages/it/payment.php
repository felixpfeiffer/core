<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2009-2011 Isotope eCommerce Workgroup
 * @author     Blair Winans <blair@winanscreative.com>
 * @author     Angelica Schempp <aschempp@gmx.net>
 * @author     Paolo B. <paolob@contaocms.it>
 * @author     Dan N <dan@dss.uniud.it>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */

$GLOBALS['TL_LANG']['MSC']['authorizedotnet']['1'] = 'Approvato';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet']['2'] = 'Negato';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet']['3'] = 'Errore';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet']['4'] = 'Trattenuta per analizzare';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['1']['1'] = 'Questa transazione è stata approvata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['2'] = 'Questa transazione è stata negata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['3'] = 'Questa transazione è stata negata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['4'] = 'Questa transazione è stata negata. - Il codiceritornato dal processore indica che la card deve essere ritirata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['5'] = 'E\' necessaria una quantità valida - Il valore inserito nel campo quantià non è stato validato come numero.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['6'] = 'Il numero della carta di credito non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['7'] = 'La data di scadenza della carta di credito non è valida. - Il formato inserito della data non è corretto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['8'] = 'La carta di credito è scaduta.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['9'] = 'Il codice ABA non è valido. - Il valore insertio nel campo x_bank_aba_code non è stato validato o non è stato emesso da un istitudo finanziario valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['10'] = 'Il numero di conto non è valido. - Il valore inserito nel campo x_bank_acct_num non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['11'] = 'Una transazione duplicata è stata inserita. Una transazione con la stessa quantita e info di carta di credito sono state inserite due minuti fa.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['12'] = 'E\' richiesto un codice di autorizzazione non presente. - Una transazione che richiede la presenza di un x_auth_code è stata inserita senza valore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['13'] = 'L\'ID Login API del negoziante non è valido oppure il conto non è attivo.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['14'] = 'Il valore di riferimento o la risposta di trasmisione URL è invalido. Il valore di riferimento o la risposta di trasmisione URL non combaciano con i valori negoziante configurati oppure non è presente. Applicabile soltanto alle API SIM e WebLink.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['15'] = 'La transazione ID non è valida. - Il valore della transazione ID è non numerico oppure non è stato presente per una transazione che lo richiede (ad esempio VOID, PRIOR_AUTH_CAPTURE, e CREDIT).';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['16'] = 'La transazione non è stata trovata. - L\'ID della transazione inviato è stato formattato correttamente ma il gateway non ha registrato la transazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['17'] = 'Il negoziante non accetta questo tipo di carta di credito. - Il negoziante non è stato configurato per accettare la carta di credito inserita nella transazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['18'] = 'Le transazioni ACH non sono accettate da questo negoziante. - Il negoziante non accetta bonifici elettronici.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['19'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['20'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['21'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['22'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['23'] = 'Si è verificato  un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['24'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['25'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['26'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['27'] = 'La transazione risulta in una discrepanza AVS. L\'indirizzo fornito non corrisponde all\'indirizzo di fatturazione del proprietario della card.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['28'] = 'Il negoziante non accetta questo tipo di carta di credito. - L\'ID del Negoziante al processore non è stato configurato per accettare questo tipo di card.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['29'] = 'I numeri identificativi di Paymentech non sono corretti. Chiami il Fornitore Servizi del Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['30'] = 'La configurazione con il processore non è valida. Chiami il Fornitore Servizi del Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['31'] = 'L\'ID Negoziante FDC o l\'ID Terminal non è corretto. Chiami il Fornitore Servizi del Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['32'] = 'Il codice di motivazione è riservato o non è applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['33'] = 'Non è stato compilato un campo come richiesto dal negoziante. Per ulteriori informzioni per cortesia veda il paragrafo riferito alle Impostazioni Form nelle Guida Integrazione del Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['34'] = 'I numeri identificativi VITAL non sono corretti. Chiami il Fornitore Servizi del Negoziante. - Il negoziante è stato configurato in modo errato al processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['35'] = 'Si è verificato un errore durante il processo. Chiami il Fornitore Servizi del Negoziante. - Il negoziante è stato configurato in modo errato al processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['36'] = 'L\'autorizzazione è stata approvata ma la transazione è fallita.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['37'] = 'Il numero della card non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['38'] = 'I numeri identificativi del Global Payment System non è corretto. Chiami il Fornitore Servizi del Negoziante. - Il negoziante è stato configurato in modo errato al processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['40'] = 'La transazione deve essere criptata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['41'] = 'Questa transazione è stata negata. - Solo i negozianti inseriti nel servizio FraudScreen.Net ricevono questo rifiuto. Il codice ha restituito un punteggio frode maggiore della soglia impostata dal negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['43'] = 'Il negoziante è stato impostato in modo errato al processore. Chiami il Fornitore Servizi del Negoziante. - Il negoziante è stato configurato in modo errato al processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['44'] = 'La transazione è stata negata. - Il codice della carta di credito inserito nella transazione non corrisponde al codice della card nell\'archivio della banca emittente e quindi la transazione è stata negata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['45'] = 'Questa transazione è stata negata. Questo errore si presenta se la transazione ha ricevuto un codice dal processore che corrisponde i criteri di rifiuto impostati dal negoziante per gli AVS e ci fitri codice card.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['46'] = 'Questa sessione è scaduta oppure è inesistente. Deve loggarsi per poter continuare a lavorare. -';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['47'] = 'La somma richiesta per la transazione non può essere maggiore della soma autorizzata originalmente. - Questo succede se il negoziante tenta di catturare fondi maggiori della somma originalmente autorizzata per un\'unica transazione';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['48'] = 'Questo processore non accetta importi parziali. - Il negoziante tenta di eseguire una transazione per una somma minore rispetto a quella originalmente autorizzata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['49'] = 'Una transazione con una quantità maggiore di $[amount] non sarà accettato. - La quantità della transazione inserita era superiore alla quantità massima permessa.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['50'] = 'Questa transazione aspetta di essere conclusa e non è reversibile. - I crediti o i rimborsi possono essere attivati soltanto a transazione conclusa. La transazione per la quale il credito/rimborso è statao richiesto non è stata conclusa, quindi non possiamo emmettere un credito.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['51'] = 'La somma di tutti i crediti associati a questa transazione è superiore alla quantità della transazione originale.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['52'] = 'La transazione è stata autorizzata, ma è stato impossibile informare il cliente.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['53'] = 'Il tipo di transazione è stato non validio per le transazioni ACH. Se x_method = ECHECK, x_type non può essere impostato su CAPTURE_ONLY.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['54'] = 'La transazione in causa non soddisfa i criteri per emettere un credito.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['55'] = 'La somma di crediti correlati alla transazione supera il debito originale. La transazione è negata se la somma di questo credito insieme a quelli precedenti supera la somma originale del debito.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['56'] = 'Questo negoziante accetta solo transazioni ACH; nessuna transazione di carta di credito è accettata. - Il negoziante accetta solo transazioni eCheck.Net e non accetta carte di credito.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['57'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['58'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['59'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['60'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['61'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['62'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['63'] = 'Si è verificato un errore durente la transazione. Per cortesia riprovi tra 5 minuti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['65'] = 'Questa transazione è stata negata. - La transazione è stata negata perché il negoziante ha configurato le credenziali del proprio account attraverso l\'Interfaccia Negoziante per rifiutare le transazioni con certi valori per discrepanze nel Card Code.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['66'] = 'Questa transazione non può essere accettata e processata. - La transazione non ha soddisfatto le linee guida di sicurezza del gateway.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['68'] = 'Il parametro versione non è valido. - Il valore inserito nella versione x_version non è valdio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['69'] = 'Il tipo di transazione non è valido. - Il valore inviato in x_type non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['70'] = 'Il metodo della transazione non è valido. - Il valore inviato in x_method non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['71'] = 'Il tipo di conto bancario non è valdio. Il valore inviato in x_bank_acct_type è stato invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['72'] = 'Il codice di autorizzazione è invalido. - Il valore inserito in x_auth_code è stato più lungo di sei caratteri.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['73'] = 'La patente o la data di nascita sono invalidi. - Il formato del valore inserito x_drivers_license_dob è stato invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['74'] = 'La quantità dei dazi è invalida. - Il valore inserito in x_duty non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['75'] = 'La quantità di merci è invalida. - Il valore inserito in x_freight non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['76'] = 'L\'ammontare delle aliquote non è valida. Il valore inserito in x_tax non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['77'] = 'Il CF (SSN) oppure l\'ID tax è invalido. - Il valore inserito in x_customer_tax non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['78'] = 'Il codice della carta di credito (CVV2/CVC2/CID) è invalido. - Il valore inserito in x_card_code non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['79'] = 'Il numero della patente di guida è invalido. - Il valore inserito in x_drivers_license non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['80'] = 'Lo stato della patente di guida è invalido. - Il valore inserito in x_drivers_license non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['81'] = 'Il tipo di form richiesto non è valido. - Il negoziante ha richiesto un metodo di integrazione non compatibile con l\'API di AIM';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['82'] = 'Gli script sono supportati solo nella versione 2.5. - Questo sistema non supporta più la versione 2.5; non si possono sottoporre richieste agli script.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['83'] = 'Lo scripto è invalido o non è più suportato. - Il sistema non supporta più la versione 2.5; le richieste non possono essere sottoposte agli script.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['84'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['85'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['86'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['87'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['88'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['89'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['90'] = 'Questo codice di motivazione è riservato o non applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['91'] = 'La versione 2.5 non è più supportata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['92'] = 'Il gateway non supporta più i metodi richieste di integrazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['97'] = 'Questa transazione non è stata accettata. - Applicabile soltanto alle API SIM. Le impronte digitali sono valide per un periodo breve di tempo. Se l\'impronta è più vecchia di un ora o di 15 minuti nel futuro, sarà rifiutata. Il codice indica che la transazione con impronta digitale è scaduta.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['98'] = 'Questa transazione non può essere accettaa. - Applicabile alle API SIM. La transazione con impronta digitale è già stata utilizzata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['99'] = 'La transazione non può essere accettata. - Applicabile solo alle API SIM. L\'impronta digitale generata dal server non corrisponde all\'mpronta specificata dal negoziante nel campo x_fp_hash.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['100'] = 'Il tipo eCheck.Net è invalido. - Applicabile solo a eCheck.Net. Il valore specificato nel campo x_echjeck_type non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['101'] = 'Il nome fornito come credenziale e/o per il tipo di conto non corrispondon al conto attuale. - Applicabile solo a eCheck.Net. Il nome fornito come credenziale e/o il tipo di account non corrisponde agli archivi NOC per questo conto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['102'] = 'La richiesta non è stata accettata. - Una password o una Chiave di Transazione è stata inviata con questa richiesta WebLink. Questo rappresenta un rischio di sicurezza alto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['103'] = 'Questa transazione non può essere accettata. - Un\'impronta digitale valida, Chiave di Transazione o password è necessaria per questa transazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['104'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per il paese non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['105'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per la città e il paese non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['106'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per l\'azienda non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['107'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per il conto bancario non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['108'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per il nome e il cognome non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['109'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per il nome e il cognome non è stato validato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['110'] = 'La transazione in questo momento è sotto revisione - Applicabile solo a eCheck.Net. Il valore inviato per il nome del conto bancario non contiene caratteri validi.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['116'] = 'L\'indicatore di autenticità è invalido. - Questo errore è applicabile alle transazioni con Codici Verificati da Visa e Mastercard SecureCode. Il valore ECI per una transazione Visa; oppure l\'indicatore UCAF per una transazione MasterCard insertio nel campo x_authentication_indicator è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['117'] = 'Il valore di autenticazione del proprietario della card è invalido. - Questo errore è applicabile alle transazioni con Codici Verificati da Visa e Mastercard SecureCode. Il CAVV per le transazioni Visa; oppure il AVV/UCAF per le transazioni MasterCard è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['118'] = 'La combinazione tra l\'indicatore di autenticazione e il valore di autenticazione del possessore della card è invalida. - Questo errore è applicabile alle transazioni con Codici Verificati da Visa e Mastercard SecureCode. La combinazione tra l\'indicatore di autenticazione e il valore di autenticazione del possessore della card è invalida. Per ulteriori informazioni veda Autenticazione Proprietario Card';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['119'] = 'Le transazioni che hanno valori di autenticazione possessore card non possono essere considerate come ricorrenti. - uesto errore è applicabile alle transazioni con Codici Verificati da Visa e Mastercard SecureCode. Le transazioni inviate con un valore in x_authentication_indicator e x_recurring_billing = YES saranno rifiutate.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['120'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. Il vuoto generato dal sistema per la transazione scaduta è fallito. (La transazione originale è scaduta aspettando una risposta dall\'autorizzatore.)';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['121'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. Il vuoto generato dal sistema per la transazione scaduta è fallito. (La transazione originale ha incontrato un errore di database.)';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['122'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. Il vuoto generato dal sistema per la transazione scaduta è fallito. (La transazione originale ha incontrato un errore di processo.)';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['123'] = 'A questo conto non sono state forniti i permessi necessari per questo tipo di richiesta. - La richiesta di transazione deve includere lID Login APi associato al conto gateway di pagamento.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['127'] = 'La transazione è risultata ad avere una discrepanza AVS. L\'indirizzo inserito non corrisponde all\'indirizzo della fattura del proprietario della card. - Il sistema ha generato vuoto per la transazione AVS fallita originalmente.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['128'] = 'Questa transazione non può essere processata. Ai clienti dell\'istituto finanziario non è permesso fare transazioni con questo conto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['130'] = 'Questo gateway di pagamento è stato chiuso. - IFT: Il conto gateway di pagamento risulta su una lista nera.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['131'] = 'Questa transazione non può essere accettata in questo momento. - IFT: Il conto gateway di pagamento è Sospeso-STA.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['132'] = 'Questa transazione non può essere accettata in questo momento. -IFT: Il conto gateway di pagamento è Sospeso-Sulla Lista Nera.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['141'] = 'Questa transazione è stata negata. - Il sistema ha generato vuoto per la transazione fallita originale FraudScreen-rejected.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['145'] = 'Questa transazione è stata negata. - Il sistema ha generato vuoto per il codice card originale rifiutato e la transazione AVS-rifiutata fallita.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['152'] = 'La transazione è stata autorizzata, ma non è stato possibile avvisare il cliente: la transazione non sarà conclusa. - Il sistema ha generato vuoto per la transazione fallita. Non è stato possibile comunicare al cliente la rispota per la transazione originale.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['165'] = 'Questa transazione è stata negata. - Il sistema ha generato vuoto per il codice card originale rifiutato e la transazione AVS-rifiutata fallita.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['170'] = 'Si è verificato un errore durante il processo. Per cortesia contattare il negoziante. La concordanza EFS Provisioning non è stato completato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['171'] = 'Si è verificato un errore durante il processo. Per cortesia contattare il negoziante. - Concordanza EFS Questa richiesta è invalida.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['172'] = 'Si è verificato un errore durante il processo. Per cortesia contattare il negoziante. - Concordanza EFS Questo ID è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['173'] = 'Si è verificato un errore durante il processo. Per cortesia contattare il negoziante. - Concordanza EFS La chiave negozio è invalida.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['174'] = 'Si è verificato un errore durante il processo. Per cortesia contattare il negoziante. - Concordanza EFS Questo tipo di transazione non è accettato dal processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['175'] = 'Il processore non accetta lo svuotamento dei crediti. - Concordanza EFS Questa transazione non è permessa. La piattaforma di processo Concordanza EFS non supporta le transazioni di svuotamento crediti. Per cortesia adebiti la carta di credito invece di svuotare i crediti.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['180'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. - Il formato della risposta del processore non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['181'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. - Il vuoto generato dal sistema per la transazione. (La transazione originale ha incluso un formato risposta invalido.)';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['185'] = 'Il codice di motivazione è riservato o non è applicabile a questa API.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['4']['193'] = 'La transazione è momentaneamente sotto revisione. - La transazione è stata messa sotto revisione dal sistema management del rischio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['200'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il numero della carta di credito è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['201'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. La data di scadenza è invalida.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['202'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il tipo di transazione è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['203'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il valore inserito nel campo quantità è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['204'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il codice del dipartimento non è valido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['205'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il valore inserito nel campo numero negoziante è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['206'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il negoziante non è presente in archivio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['207'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il conto del negoziante è chiuso.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['208'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il negoziante non è presente in archivio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['209'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. La comunicazione con il processore non è stata stabilita.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['210'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il tipo di negoziante non è corretto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['211'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il proprietario della carta di credito non è in archivio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['212'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. La configurazione della banka non è in archivio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['213'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il codice tributario del negoziante non è corretto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['214'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Questa funzione non è al momento disponibile.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['215'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il formato campo criptato del PIN è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['216'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il termine ID dell\'ATM è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['217'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Questa transazione ha incontrato un problema di formato generico di messaggio.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['218'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il formatto blocco o il valore dispnibilità PIN è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['219'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il vuoto ETC non è corrisposto.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['220'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. La CPU primaria non è disponibile.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['221'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Il numero SE è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['222'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Richiesta autorizzazione duplicata (dall\'INAS).';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['223'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Questa transazione ha incontrato un errore non specificato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['224'] = 'Questa transazione è stata rifiutata. - Questo codice di errore si applica soltanto ai negozianti su FDC Omaha. Per cortesia rispedisca la transazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['243'] = 'Fatturazione ricorrente non permessa per questo tipo di eCheck.Net. - La combinazione di valori inserito per il x_recurring_billing e x_echeck_type non è permessa.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['244'] = 'Questo tipo di eCheck.Net non è permesso per questo tipo di conto bancario. - La cominazione di valori inseriti per x_bank_acct_type e x_echeck_type non è permessa.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['245'] = 'Questo tipo di eCheck.Net non è permesso quando si usa un gateway di pagamento sotto forma di pagamento hosted. Il valore inserito per x_echeck_type non è permesso quando si usa un gateway di pagamento sotto forma di pagamento hosted.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['246'] = 'Questo tipo di eCheck.Net non è permesso. - Il conto di pagamento gateway negoziante non è abilitato per inviare il tipo eCheck.Net.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['247'] = 'Questo tipo di eCheck.Net non è permesso. - La cmbinazione di valori inviate per x_type e x_echeck_type non è permessa.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['248'] = 'Il numero check non valido. Numero check invalido. Il numero check può solo avere numeri e lettere e non può superare 15 caratteri.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['250'] = 'La transazione è stata negata. - Questa transazione è stata inviata da un indirizzo IP bloccato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['251'] = 'La transazione è stata bloccata. - La transazione è stata negata come risultato di un filtraggio di Dettezione Frode.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['4']['252'] = 'Il suo ordine è stato ricevuto. Grazie per la fiducia! - La transazione è stata accettata, ma è stata fermata per controllo negoziante. Il negoziante può personalizzare la risposta al cliente nell\'Interfaccia Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['4']['253'] = 'Il suo ordine è stato ricevuto. Grazie per la fiducia! - La transazione è stata accettata, ma è stata fermata per revisione negoziante. Il negoziante può personalizzare la risposta al cliente nell\'Interfaccia Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['254'] = 'La sua transazione è stata negata. La transazione è stata negata dopo una revisione manuale.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['261'] = 'Si è verificato un errore durante il processo. Per cortesia riprovi. - La transazione ha incontrato un errore durante la criptazione di dati sensibii e non è stata processata. Per cortesia riprovi.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['270'] = 'L\'oggeto [item number] è invalido. Un valore inserito nel x_line_term per l\'oggetto è invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['271'] = 'Il numero di oggetti non è permesso. Un numero massimo di 30 oggetti è permesso. Il numero di oggetti inserito supera il numero di massimo 30.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['288'] = 'Il Negoziante non è registrato al registro Autenticazione Possessori Card. Questa transazione non è stata accettata. - Il negoziante non ha indicato la partecipazione a nessun programma di Autenticazione Possessore Card nell\'Interfaccia Negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['289'] = 'Il processore non accetta autorizzazione zero dollar per questo tipo di card. - Il suo sistema di processamento della cartaq di credito non accetto autorizzazioni zero dollar per le carte di credito Visa. Può trovare il processore della sua carta di credito elencato nel profilo negoziante.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['290'] = 'Una o più richieste AVS per autorizzazioni zero dollar è stata inviata.- Quando inserite le richieste di autorizzazione per Visa, i campi indirizzo e CAP devono essere compilati.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['4']['295'] = 'La quantità di questa richiesta è stata parzialmente approvata sulla card prepagata. Pagamenti aggiuntivi sono necessari per completare il bilancio di questa transazione. - Il negoziante deve avere abilitata l\'autorizzazione parziale nell\'interfaccia negoziante per ricevere questo errore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['296'] = 'Lo SplitTenderid non è valido';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['297'] = 'Un ID transazione e un split tender ID non possono essere usati entrambi in una singola richiesta di transazione.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['300'] = 'L\'ID de dispositivo è invalido. - Valore x_device_id invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['301'] = 'Il lotto ID del dispositivo è invalido. - Valore x_device_batch_id invalido.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['302'] = 'Flag reversibile invalido. Valore x_reversal_flag.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['303'] = 'Il lotto del dispositivo è pieno. Per cortesia chiuda il lotto. Il lotto dispositivo corrente deve essere chiuso manualmente dal servizio dispositivo POS.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['304'] = 'La transazione originale è in un lotto chiuso. La transazione originale è conclusa e non è reversibile.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['305'] = 'Il negoziante è configurato per l\'autochiusura. Questo negoziante è configurato per l\'autochiusura e non può chiudere i lotti manualmente.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['306'] = 'Questo lotto è stato già chiuso. - Questo lotto è stato già chiuso.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['1']['307'] = 'La reversibilità è stata processata con successo. - La reversibilità è stata processata con successo.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['1']['308'] = 'Transazione originale per la reversibilità non trovata. - Transazione originale per la reversibilità non trovata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['3']['309'] = 'Il dispositivo è stato disabilitato. - Il dispositivo è stato disabilitato.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['1']['310'] = 'Questa transazione è stata già svuotata. - La transazione è stata già svuotata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['1']['311'] = 'Questa transazione è stata tià catturata. - Questa transazione è stata tià catturata.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['315'] = 'Il numero della carta di credito è invalido. - Questo è un rifiuto da parte del processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['316'] = 'La data di scadenza della carta di credito è invalida. - Questo è un rifiuto da parte del processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['317'] = 'La carta di credito è scaduta. Questo è un rifiuto da parte del processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['318'] = 'Una transazione duplicato è stata inviata. - Questo è un rifiuto da parte del processore.';
$GLOBALS['TL_LANG']['MSG']['authorizedotnet']['2']['319'] = 'La transazione non è stata trovata. - Questo è un rifiuto da parte del processore.';

