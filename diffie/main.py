import random
# generate a string of random words
word_file = "/usr/share/dict/words"
WORDS = open(word_file).read().splitlines()

# generate a string of random words


def generate_word():
    w = random.choice(WORDS) + random.choice(WORDS) + random.choice(WORDS)
    # remove all non-alpha characters from w
    w = ''.join(c for c in w if c.isalpha())
    return w

# ceaser cipher


def ceaser_cipher(word, shift):
    new_word = ""
    for letter in word:
        if letter.isalpha():
            new_letter = chr((ord(letter) - ord('a') + shift) % 26 + ord('a'))
            new_word += new_letter
        else:
            new_word += letter
    return new_word


print("Welcome to the Diffie-Hellman Key Exchange Program!")
print("This program will generate a random word, and then encrypt it using a Ceaser Cipher.")
print("You will need to decrypt the word and send the plaintext")
print("If you are correct you will get the flag!")
print("P=15, G=5, A=5, B=13")
print("")
word = generate_word()
public = ceaser_cipher(word, 5)
print("the ciphertext is: " + public)
guess = input("Enter the plaintext: ")
if guess == word:
    print("cccs{d1ff13_H3llM4N}")
else:
    print("Incorrect, try again!")
