Sista föreläsningen lp3 (oopython, linux kmom10)
=================================



Digital Ocean
---------------------------------

1. (pi som hemmaserver)
(eget domännamn)

1. Create a droplet

1. Startmiljö som repo
https://github.com/mosbth/env

1. Visa install-biten

1. Visa aliases och fecr



Tmux och servrar
---------------------------------

1. Grunden med tmux

alias tmux_basic_start='tmux new-session -s basic' 
alias tmux_basic='tmux attach -t basic'

alias tbs='tmux_basic_start'
alias tb='tmux_basic'
tb -d


1. Tmux med olika servrar

servrar, ssh.student, seekers, sweet
visa irc, logga in/ut och reconnecta


1. Komma åt egen hemmaserver

Logga in hemmaservern
Visa irc
Logga in på desktop


1. Infrastruktur mellan servrar

ssh
ssh keys

ssh-keygen -t rsa
ssh-copy-id -i $HOME/.ssh/id_rsa.pub mos@linux.dbwebb.se -p 2222

rsync
(git / github)
(tmux)



dbwebb-cli
---------------------------------

1. Repot
* https://github.com/mosbth/dbwebb-cli/graphs/contributors
* https://github.com/mosbth/dbwebb-cli/issues


1. Varför?
* Varför behövdes dbwebb-cli?
* Samband med första python kursen (och javascript1)
* Behov av validering
* Behov av att hjälpa på distans, upload/download
* Minifiering och skydd
* Förenkla rättning


1. Hur är det uppbyggt?
* v1 del av kursrepot, v2 som eget program
* dbwebb2, dbwebb2-validate, dbwebb2-inspect
* install.bash (https://dbwebb.se/dbwebb-cli/installera)
* Makefile slår samman delarna från \*.bash
* Funktioner, bootstrap, usage, script


1. Erfarenheter 3 år senare?
* Koll på bash-programmering
* Många små berg att kliva över...
* Skriptet, kursrepot, användarens konfig
* Kompabilitet mellan linux, Mac, Cygwin
* Struktur som fungerar att underhålla/vidarutveckla
* (delvis omskrivet 2 gånger)
* Mycket kod för att underhålla själva koden (selfupdate, check, etc)
* Passerar koden shellcheck?
* Värsta mardrömmen?

* 10-30% död kod, delvis bunden till äldre versioner
* Bakåtkompabilitet...
* Kod som skrivs kan "alltid" skrivas bättre
* (https://github.com/mosbth/dbwebb-cli/blob/master/dbwebb2#L371)


1. Kika på hur det fungerar
* dbwebb-init
* dbwebb-sshkey
* dbwebb-validate


1. Kärnan i dbwebb-validate
* validate()
* publish()
* publishChmod()


1. Kärnan i dbwebb-inspect
* Tex linuxkmom05()


1. Lokal testmiljö av kursrepo
* make test
* make dbwebb-validate
* make dbwebb-inspect


1. Summering
* Är det värt insatsen?



Node.js
------------------------------------------------

1. Moduler, exempel med guessmynumber
* (https://dbwebb.se/kunskap/gor-en-kommandoradsklient-i-node-js)

1. Promise
* (https://dbwebb.se/kunskap/nodejs-mysql-och-promise)



Python och venv med ooadv
------------------------------------------------

1. Var hamnar moduler som installeras?
* Globalt kontra lokalt?

- system packages
>>> import sys
>>> sys.prefix

- pip packages
>>> import site
>>> site.getsitepackages()

1. Virtual environments
https://docs.python.org/3/library/venv.html

1. Skapa, aktivera/deaktivera en venv
python3 -m venv .venv
.venv/bin/activate
deactivate

1. Exempel med python/example/image
wget https://raw.githubusercontent.com/dbwebb-se/python/master/example/image/image.py
wget https://github.com/dbwebb-se/python/raw/master/example/image/mos.jpg
python3 image.py
activate
pip install pillow
pip list
pip freeze


1. Miljö
```
# Python
alias activate=". .venv/bin/activate"
PIP_DOWNLOAD_CACHE="$HOME/.pip_download_cache"
[ -d "$PIP_DOWNLOAD_CACHE" ] || mkdir "$PIP_DOWNLOAD_CACHE"
```

1. ooadv med virtualenv
Skapa en virtualenv
Aktivera den
Installera alla moduler
Kolla med make check
Deaktivera
Kolla med make check
