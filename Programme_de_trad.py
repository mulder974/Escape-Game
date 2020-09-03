def decode_alien():
    m=input("Saisissez la phrase à traduire: ")
    dict_alien_fr = {
    '.':'.',
    '!':'!',
    '?':'?',
    ',':',',
    '': '',
    '__': ' ',
    '/\\' : 'a',
    ']3': 'b',
    '(': 'c',
    '|)': 'd',
    '[-': 'e',
    '/=': 'f',
    '(_,': 'g',
    '|-|': 'h',
    '|': 'i',
    '_T': 'j',
    '/<': 'k',
    '|_': 'l',
    '|\\/|': 'm',
    '|\\|': 'n',
    '()': 'o',
    '|^': 'p',
    '()_': 'q',
    '/?': 'r',
    '_\\~': 's',
    '~|~': 't',
    '|_|': 'u',
    '\\/': 'v',
    '\\/\\/': 'w',
    '><': 'x',
    '`/': 'y',
    '~/_': 'z'
    }
    
    a=''.join(dict_alien_fr[i] for i in m.split(m[0]))
    print("\n" + "Voici la traduction en francais:"  + "\n" + "\n" + a + "\n")


def decode_fr():
    m=input("Saisissez la phrase à traduire en alien: ")
    trad=""
    dict_fr_alien = {
    '.':'.',
    '!':'!',
    '?':'?',
    ',':',',
    '': '',
    ' ': '__',
    'a': '/\\',
    'b': ']3',
    'c': '(',
    'd': '|)',
    'e': '[-',
    'f': '/=',
    'g': '(_,',
    'h': '|-|',
    'i': '|',
    'j': '_T',
    'k': '/<',
    'l': '|_',
    'm': '|\\/|',
    'n': '|\\|',
    'o': '()',
    'p': '|^',
    'q': '()_',
    'r': '/?',
    's': '_\\~',
    't': '~|~',
    'u': '|_|',
    'v': '\\/',
    'w': '\\/\\/',
    'x': '><',
    'y': '`/',
    'z': '~/_'
    }

    a = m.lower()
    a = list(a)

    for i in a:              
        if i == "é":
            a[a.index("é")] = "e"
        elif i =="è":
            a[a.index("è")] = "e"
        elif i =="ê":
            a[a.index("ê")] = "e"
        elif i == "à" :
            a[a.index("à")] = "a"
        elif i =="'" :
            a[a.index("'")]= " "

    m="".join(a)

    for i in m:    
        trad+= "}"+ dict_fr_alien[i]
    
    print("\n" + "Voici la traduction en alien:"  + "\n" + "\n" + trad + "\n")


menu = """S'il vous plaît, faites votre choix:
1) traduction francais-alien
2) traduction alien-francais
0) quitter

Your selection: """

print("Bienvenu dans l'outil de traduction ! ")

user_input = input(menu)
while user_input != "0":
    if user_input == "1":
        decode_fr()
    elif user_input == "2":
        decode_alien()
    else:
        print("Please select a number from 1 to 2, or 0 to exit")
    user_input = input(menu)
    
    