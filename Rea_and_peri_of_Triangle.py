

import math

a = int(input("Enter side a of triangle: "))
b = int(input("Enter side b of triangle: "))
c = int(input("Enter side c of triangle: "))


class TriAngle():

    def __init__(self, a, b, c):
        self.a = a
        self.b = b
        self.c = c

    def area(self):
        s = (a + b + c)/2
        area = math.sqrt(s*(s-a)*(s-b)*(s-c))
        return area

    def peri(self):
        return a+b+c


t = TriAngle(a, b, c)
print("Area of triangle:",round(t.area(),2))
print("Perimeter of triangle", round(t.peri(),2))
