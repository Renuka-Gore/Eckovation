#take the inputs
n1 = int(input())
n2 = int(input())

#perform calculations
nsum = n1+n2
ndiff = n1-n2
nmult = n1*n2

def div():
    try:
       return n1/n2
    except ZeroDivisionError:
        print("Can not be devided by 0!")

#display results

#In next 3 statements, replace '#' with appropriate command
print('Sum of the two numbers is: ', nsum)
print('Difference of the two numbers is: ', ndiff)
print('Product of the two numbers is: ' , nmult)
print('Divison of two numbers is: ', div())
