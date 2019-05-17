
Vi jobbar på ett företag som drivern en random webbsida, vi har utvecklare, QA, testare, säkerhetsnissar och ops som driver hemsidan tillsammans. Det finns många konkurrerande sidor som tävlar om samma besökare och det dyker upp nya startups hela tiden som försöker ta sig in på samma marknad som oss. Vårt företag måste därför snabbt kunna testa och få ut ny funktionalitet till besökarna samtidigt som sidan är stabil och tillgänglig för besökarna så vi inte förlorar marknadsdelar. Arbetsplatsen lider av den klassiska Core, chronic conflict.

Hela IT organisationen har två bestående mål som båda måste uppfyllas hela tiden.

- Vi behöver agera snabbt för att hänga med på marknadens konstanta snabba utveckling. (Ny funktionalitet) 

- Samtidigt som sidan behöver vara stabil, pålitlig och säker för våra besökare.

Utvecklarna jobbar med mål 1, skapa ny funktionalitet och får i produktion så snabbt som möjligt. Medans Ops jobbar med mål 2, se till att produktionsmiljön är tillgänglig för besökarna. Detta försvårar för utvecklare som konstant vill få in ny funktionalitet i produktion som kan äventyra miljön. Detta kallar Dr Goldratt "The core, chronic conflict - when organizational measurements and incentives across different silos prevent the achievement of global, organizational goals!".

Denna konflikten kan skapa en nedåtgående spiral av långsammare driftsättningar, sämre kvalitet och en växande teknisk skuld.

Spiralen har tre steg:

steg 1:
Det börjar hos Ops som ska använda verktyg och driftsätta utvecklarnas kod som är dåligt dokumenterade, komplicerade och kraschar lätt på grund av den tekniska skulden eller att sidan blev plötsligt väldigt populär. Detta gör att webbsidan kraschar och inte fungerar som den ska vilket i sin tur gör att organisationen inte når upp till sina intäkts mål och sidan är inte tillgänglig för besökarna.

steg 2:
Någon behöver kompensera för problemen som uppstod i steg 1 och då börjar steg 2. Det kan vara en produkt ägare som lovar att leverera en ny häftigt funktion eller en chef som sätter högre inkomstmål för att kompensera för den tidigare förlusten. Detta förbinder IT organisationen att leverera de nya löftena oberoende av vad som gjorde att problemen uppstod eller vad teknologin klarar av.

steg 3:
I sista steget behöver vi fortfarande producera ny saker samtidigt som gamla fel behöver fixas och produktionsmiljön behöver vara tillgänglig  och stabil för besökarna. Då har vi en arbetsplats där folk behöver jobba övertid, ta genvägar och den tekniska skulden växer. Men nu är folk mer upptagna, behöver jobba övertid och blir mer stressade. Det krävs mer kommunikation för att lösa problem samtidigt som folk är mindre benägna att kommunicera då folk beskyller varandra för problemen.
Kvalitén på arbetet blir sämre, produktionscyklerna blir långsammare och färre projekt startas. Organisationen hänger inte längre med konkurrenterna på marknaden och sidan förlorar besökare.


Nu är tanken att vi ska lösa detta med DevOps eller om man jobbar med devops ska det inte uppstå.

så vad är DevOps?

DevOps är ett tankesätt, många tänker att det är att använda verktyg som Ansible, Docker och Jenkins för att automatisera och sätta upp kontinuerliga flöden. Men det är inta att använda verktygen som är DevOps utan det är hur man använder verktygen och att ha en arbetskultur där individer och organisationer tillåts att utveckla och underhålla en hållbara arbetspraxis.


produkt ägare, QA, ops och säkerhet ska jobba tillsammans för att skapa ett snabbt och säkert flöde mellan planerat arbete och produktion. QA, IT och säkerhet skapar automatiserade verktyg och plattformar som utvecklarna kan använda för att snabbt, enkelt och självständigt utveckla, testa och driftsätta lösningar och ny funktionalitet.

Så utvecklare ska ha en produktionsliknande miljö lokalt där de kan testa kod. När man commitar ska kod köra automatisk i en mer produktionsliknande miljö. Där kör vi mer tester, inter, funktion och gui hela köret. Sen kör vi code reviews för att sprida kunskapen och ett till säkerhetsteg för att kolla koden. När allt det är klart så sker automatisk en driftsättning eller om utvecklaren själv klickar på en knapp så det driftsätts. Vi ska vara säkra på att om koden har passerat alla stegen så är den redo att driftsättas. Vi som utvecklare behöver ha den tilliten från kollgegor och chefer att koden vi skriver när den ha passerat alla checkpoint så fungerar den. Utvecklare och organisationer inom företag ksa äga koden och ansvaret för sitt jobb, oavsett vilken roll man har. Vi måste lita på att våra kollegor vet vad de gör.

För att detta ska fungera behöver vi få snabb återkoppling vid varje steg i processen, man ska hela tiden kunna se effekten av sitt arbete. Vi har automatiska tester i produktionsliknande miljö som snabbt ger oss återkoppling att saker fungerar i miljön som den ska köras.

Det behövs också återkoppling från produktionsmiljön. SÅ när saker väl går fel märker vi det och kan snabbt hitta vad som är fel. Därför behöver vi logga allt som sker, mäta och samla in data. See har vi program som samlar ihop och visar upp detta och kan notificera när något inte är rätt.

VI ska hela tiden få feedback på att vi skapar, via tester, peer reviews och data.

Men saker kan alltid gå fel och kommer göra det, och då är det viktigt att man har en kultur som inte handlar om att beskylla eller straffa någon utan istället utför man en obduktion av felet där vi ska få en förståelse för vad och varför det hände och vi vi kan förhindra det från att ske i framtiden. Och vi ska se det som ett tillfälle för lärande, vi ska sprida kunskap som inte fans och gjorde att felet uppstod.




Detta var en snabb intro till devops.
Det jag vill att ni ska komma ihåg från denna presentationen är något som kallas "The three ways of Devops":

Principle of flow. Flöden som accelerarar arbete till produktions

principle of feedback: Vi ska hela tiden få feedback på vårt arbete både före och efter driftsättning.

principle of contiual learning and experimentation: vi ska hela tiden lära oss nya saker och av misstag inom en arbetsplats där vi har tillit och att arbetet vi gör är viktigt och tar oss närmare organisationens mål.
Detta gör att vi kan ta större risker och kan experimentera med, då vi har flöden vi kan lita på 

Devops handboook: "a manifestation of creating a dynamic, learning organisation that continually reinforce high-trust cultural norms."