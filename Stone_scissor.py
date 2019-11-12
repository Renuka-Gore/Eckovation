from random import randint
print("Welcome to stone paper scssor")
print("Enter 1 to play")
play = int(input())
if play == 1:
    play = True
else:
    play = False

user = 0
comp = 0


def choice():
    print("Enter 1 to select stone!")
    print("Enter 2 to select scissor!")
    print("Enter 3 to select paper!")


while (play):
    inp = ["None", "Stone", "Scissor", "Paper"]
    choice()
    player = int(input())
    computer = randint(1, 3)
    print("I choose ", inp[player])
    if player == computer :
        print("Its a draw!")
    elif player == 1:
        if computer == 3:
            comp  = comp + 1
            print("Yes !! I win this round")
        else:
            user = user + 1
            print("Uggh !! I lost the round")
    elif player == 3:
        if computer == 2:
            comp = comp + 1
            print("Yes !! I win this round")
        else:
            user = user + 1
            print("Uggh !! I lost the round")
    elif player == 2:
        if computer == 1:
            comp = comp + 1
            print("Yes !! I win this round")
        else:
            user = user + 1
            print("Uggh !! I lost the round")
    else:
        print("Enter a valid choice please try again")

    print("--Score--")
    print("Player: ", user)
    print("Computer : ", comp)
    print("----------")

    if user == 5 :
        play = False
        print("You win the match !! I will see you next time")
    elif comp == 5:
        play = False
        print("I won the match , better luck next time")
    else :
        play = True








