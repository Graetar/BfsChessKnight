# Breadth-first search (prohledávání do šířky)

Nastíněný problém je typickým testovacím případem algoritmu zvaného "prohledávání do šířky" (viz Wikipedia https://cs.wikipedia.org/wiki/Prohled%C3%A1v%C3%A1n%C3%AD_do_%C5%A1%C3%AD%C5%99ky).
Metoda postupně v cyklu iteruje možné tahy, zároveň kontroluje již navštívená pole, aby vyloučila opakování a vhodné tahy řadí do fronty, dokud nenarazí na konec.

Nechtěl jsem objevovat kolo a lovit z paměti zasuté vzpomínky z dob školy, tak jsem pro tyto jednoduché účely a pro úsporu času použil rovnou ChatGPT a některé další internetové zdroje, které mi rovnou nabídly de facto hotové řešení. Stejně bych postupoval během reálné práce. Není vždycky nutné každý algoritmus vymýšlet znovu, pravděpodobně bych si na tom delší dobu lámal hlavu, než bych usoudil, že mám opravdu funkční a korektní řešení.

V rámci "uspořeného času" jsem kód trochu rozšířil a vylepšil (takto bych v reálu naopak nepostupoval a ušetřeným časem neplýtval, pokud bych o to nebyl požádán).

Místo standardně používané kolekce/pole pohybů koně jsem použil třídu MoveStack, která pole obaluje a přidává mu některé standardní nástroje (add, delete, getLast apod.). Třídy implementují rozhraní, nadefinoval jsem abstrakce (políčko Square, obecná figurka Piece), finální třídy (kolekce pohybů MoveStack, figurka koně Knight) a zároveň přidal i vlastnost barvy (jen jako takový PoC).

Snažil jsem se použít i pár novějších vlastností PHP, např. match, gettery/settery definované pomocí hooků, striktní typování, enumerátory...

Zároveň se omlouvám za používání angličtiny, jsem na ni zvyklý a i když jsem se snažil původně o českou verzi podle primárního zadání, nakonec mi do kódu začaly skákat anglické názvy proměnných a metod. V případě nutnosti psát názvy v češtině se samozřejmě po relativně krátké době přeorientuju :)

Kód by měl být ve své jednoduchosti samovysvětlující, kdyby byly nějaké otázky/pochyby, jsem připraven nejasnosti doplnit/vyjasnit.
