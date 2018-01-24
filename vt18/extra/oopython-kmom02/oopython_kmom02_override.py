class A:
    def __init__(self):
                  self.update()
    def update(self):
                print("base")
    # __update = update   # private copy of original update() method
class B(A):
    def update(self):
            print("sub")
            

print("A")
a = A()
print("B")
b = B()
