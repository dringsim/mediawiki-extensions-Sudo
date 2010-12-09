<?php
/**
 * Sudo
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

$messages = array();

/** English
 * @author Daniel Friesen
 */
$messages['en'] = array(
	'sudo'                        => "Log into another user's account",
	'unsudo'                      => 'Return to your account',
	'sudo-desc'                   => 'Allows sudoers to login as other users',
	'sudo-personal-unsudo'        => 'Return to your account',
	'sudo-form'                   => 'Login to:',
	'sudo-user'                   => 'Username:',
	'sudo-reason'                 => 'Reason:',
	'sudo-submit'                 => 'Login',
	'sudo-unsudo'                 => 'Welcome $1, you are currently logged into the wiki as $2. Click on "{{int:sudo-unsudo-submit}}" to return to your own login.',
	'sudo-unsudo-submit'          => 'Return',
	'sudo-success'                => 'Welcome $1, you are now logged into the wiki as $2.',
	'sudo-error'                  => 'Sudo error: $1',
	'sudo-error-sudo-invaliduser' => 'Invalid username',
	'sudo-error-sudo-ip'          => 'Cannot login to an IP address',
	'sudo-error-sudo-nonexistent' => 'That user does not exist',
	'sudo-error-sudo-self'        => 'Cannot sudo into yourself',
	'sudo-error-nosudo'           => 'You do not appear to be inside of a sudo login',
	'sudo-logpagename'            => 'Sudo log',
	'sudo-logpagetext'            => 'This is a log of all uses of sudo.',
	'sudo-logentry'               => "logged into $2's account",
	'right-sudo'                  => "Login to another user's account",
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'sudo-desc' => '{{desc}}',
	'sudo-user' => '{{Identical|Username}}',
	'sudo-reason' => '{{Identical|Reason}}',
	'sudo-submit' => '{{Identical|Login}}',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'sudo' => 'Увайсьці ў рахунак іншага удзельніка',
	'unsudo' => 'Вярнуцца ў Ваш рахунак',
	'sudo-desc' => 'Дазваляе выбраным удзельнікам уваходзіць ў сыстэму як іншыя ўдзельнікі',
	'sudo-personal-unsudo' => 'Вярнуцца ў Ваш рахунак',
	'sudo-form' => 'Увайсьці ў:',
	'sudo-user' => 'Імя ўдзельніка:',
	'sudo-reason' => 'Прычына:',
	'sudo-submit' => 'Увайсьці',
);

/** German (Deutsch)
 * @author Kghbln
 * @author The Evil IP address
 */
$messages['de'] = array(
	'sudo' => 'Mit anderem Benutzerkonto anmelden',
	'unsudo' => 'Zum eigenen Benutzerkonto zurückkehren',
	'sudo-desc' => 'Ermöglicht die Anmeldung mit einem anderen Benutzerkonto als dem Eigenen („sudo“)',
	'sudo-personal-unsudo' => 'Zum eigenen Benutzerkonto zurückkehren',
	'sudo-form' => 'Anmelden als:',
	'sudo-user' => 'Benutzername:',
	'sudo-reason' => 'Grund:',
	'sudo-submit' => 'Anmelden',
	'sudo-unsudo' => 'Willkommen $1, du bist momentan als Benutzer „$2“ im Wiki angemeldet. Klicke auf „{{int:sudo-unsudo-submit}}“, um zu deinem eigenen Benutzerkonto zurückzukehren.',
	'sudo-unsudo-submit' => 'Zurückkehren',
	'sudo-success' => 'Willkommen $1, du bist jetzt im Wiki als Benutzer „$2“ angemeldet.',
	'sudo-error' => 'Sudo-Fehler: $1',
	'sudo-error-sudo-invaliduser' => 'Ungültiger Benutzername',
	'sudo-error-sudo-ip' => 'Man kann sich nicht mit einer IP-Adresse anmelden',
	'sudo-error-sudo-nonexistent' => 'Dieser Benutzer ist nicht vorhanden',
	'sudo-error-sudo-self' => 'Man kann sich nicht noch einmal selbst anmelden',
	'sudo-error-nosudo' => 'Du scheinst nicht mit einem anderen Benutzerkonto angemeldet zu sein',
	'sudo-logpagename' => 'Sudo-Logbuch',
	'sudo-logpagetext' => 'Dies ist das Logbuch aller Verwendungen von „sudo“.',
	'sudo-logentry' => 'hat sich mit dem Benutzerkonto von $2 angemeldet',
	'right-sudo' => 'Mit anderem Benutzerkonto anmelden',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sudo' => 'Ke kontu druheho wužiwarja so přizjewić',
	'unsudo' => 'Wróćo k twojemu kontu',
	'sudo-personal-unsudo' => 'Wróćo k twojemu kontu',
	'sudo-form' => 'Přizjewić so jako:',
	'sudo-user' => 'Wužiwarske mjeno:',
	'sudo-reason' => 'Přičina:',
	'sudo-submit' => 'Přizjewjenje',
	'sudo-unsudo-submit' => 'Wróćić so',
	'sudo-error' => 'Sudo-zmylk: $1',
	'sudo-error-sudo-invaliduser' => 'Njepłaćiwe wužiwarske mjeno',
	'sudo-error-sudo-nonexistent' => 'Tón wužiwar njeeksistuje',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'sudo' => 'Aperir session in le conto de un altere usator',
	'unsudo' => 'Retornar al proprie conto',
	'sudo-desc' => 'Permitte a "transauthenticatores" de aperir session in le conto de altere usatores',
	'sudo-personal-unsudo' => 'Retornar al proprie conto',
	'sudo-form' => 'Aperir session como:',
	'sudo-user' => 'Nomine de usator:',
	'sudo-reason' => 'Motivo:',
	'sudo-submit' => 'Aperir session',
	'sudo-unsudo' => 'Benvenite $1, tu es ora authenticate in le wiki como $2. Clicca super "{{int:sudo-unsudo-submit}}" pro retornar a tu proprie conto de usator.',
	'sudo-unsudo-submit' => 'Retornar',
	'sudo-success' => 'Benvenite $1, tu es ora authenticate in le wiki como $2.',
	'sudo-error' => 'Error de transauthentication: $1',
	'sudo-error-sudo-invaliduser' => 'Nomine de usator invalide',
	'sudo-error-sudo-ip' => 'Non es possibile aperir session como un adresse IP',
	'sudo-error-sudo-nonexistent' => 'Iste usator non existe',
	'sudo-error-sudo-self' => 'Non es possibile transauthenticar se al proprie conto',
	'sudo-error-nosudo' => 'Tu non pare esser in un session transauthenticate',
	'sudo-logpagename' => 'Registro de transauthentication',
	'sudo-logpagetext' => 'Isto es un registro de tote le usos del facilitate de transauthentication.',
	'sudo-logentry' => 'aperiva session in le conto de $2',
	'right-sudo' => 'Aperir session in le conto de un altere usator',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'sudo' => 'Mat engem anere Benotzerkont aloggen',
	'unsudo' => 'Zréck op Äre Benotzerkont',
	'sudo-personal-unsudo' => 'Zréck op Äre Benotzerkont',
	'sudo-form' => 'Aloggen als:',
	'sudo-user' => 'Benotzernumm:',
	'sudo-reason' => 'Grond:',
	'sudo-unsudo-submit' => 'Zréck',
	'sudo-error-sudo-invaliduser' => 'Ongëltege Benotzernumm',
	'sudo-error-sudo-nonexistent' => 'Dee Benotzer gëtt et net.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'sudo' => 'Најава со туѓа сметка',
	'unsudo' => 'Назад на својата сметка',
	'sudo-desc' => 'Им овозможува на корисниците на Sudo да се најавуваат со туѓи сметки',
	'sudo-personal-unsudo' => 'Назад на својата сметка',
	'sudo-form' => 'Најава на:',
	'sudo-user' => 'Корисничко име:',
	'sudo-reason' => 'Причина:',
	'sudo-submit' => 'Најава',
	'sudo-unsudo' => 'Добредојдовте, $1. Моментално сте најавени на викито како $2. За да се вратите на вашата редовна сметка, кликнете на „{{int:sudo-unsudo-submit}}“.',
	'sudo-unsudo-submit' => 'Назад',
	'sudo-success' => 'Добредојдовте, $1. Сега сте најавени на викито како $2.',
	'sudo-error' => 'Грешка во Sudo: $1',
	'sudo-error-sudo-invaliduser' => 'Неважечко корисничко име',
	'sudo-error-sudo-ip' => 'Не можете да се најавите на IP-адреса',
	'sudo-error-sudo-nonexistent' => 'Нема таков корисник.',
	'sudo-error-sudo-self' => 'Не можете да се најавите на својата сметка како на туѓа',
	'sudo-error-nosudo' => 'Се чини дека не сте во Sudo-сметка',
	'sudo-logpagename' => 'Дневник на Sudo',
	'sudo-logpagetext' => 'Ова е дневник на сите употреби на Sudo',
	'sudo-logentry' => 'најава на сметката на $2',
	'right-sudo' => 'Најавување на туѓа сметка',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'sudo' => 'Zaloguj się jako inny użytkownik',
	'unsudo' => 'Powrócić do własnego konta',
	'sudo-desc' => 'Pozwala wybranym użytkownikom logować się na konta innych',
	'sudo-personal-unsudo' => 'Powrócić do własnego konta',
	'sudo-form' => 'Zaloguj się jako',
	'sudo-user' => 'Nazwa użytkownika',
	'sudo-reason' => 'Powód',
	'sudo-submit' => 'Zaloguj',
	'sudo-unsudo' => 'Witaj $1. Jesteś obecnie zalogowany do wiki jako $2. Kliknij „{{int:sudo-unsudo-submit}}”, a wrócisz do swojego własnego konta.',
	'sudo-unsudo-submit' => 'Wróć',
	'sudo-success' => 'Witaj $1. Jesteś teraz zalogowany do wiki jako $2.',
	'sudo-error' => 'Błąd zmiany zalogowania $1',
	'sudo-error-sudo-invaliduser' => 'Nieprawidłowa nazwa użytkownika',
	'sudo-error-sudo-ip' => 'Nie można zalogować się jako adres IP',
	'sudo-error-sudo-nonexistent' => 'Taki użytkownik nie istnieje',
	'sudo-error-sudo-self' => 'Nie można przelogować się na własne konto',
	'sudo-error-nosudo' => 'Nie wygląda na to abyś był zalogowany na inne konto',
	'sudo-logpagename' => 'Rejestr zmian zalogowania się',
	'sudo-logpagetext' => 'Jest to rejestr wszystkich zdarzeń zmian zalogowania się.',
	'sudo-logentry' => 'zalogowany jako $2',
	'right-sudo' => 'Zaloguj się jako inny użytkownik',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sudo-user' => 'వాడుకరిపేరు',
	'sudo-reason' => 'కారణం:',
);

