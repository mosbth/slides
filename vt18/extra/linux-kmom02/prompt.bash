green=$( tput setaf 2 )
white=$( tput setaf 7 )
reset=$( tput sgr0 )
PS1="\[$green\]\h\[$white\]:\w$\[$reset\]"
PS1_ALT="\[$green\]\w\n$\[$reset\]"
