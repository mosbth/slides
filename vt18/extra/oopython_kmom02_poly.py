class A:
    def update(self):
            print("base")
class B(A):
    def test(self):
            print("sub")

a1 = A()
a2 = A()
b1 = B()
b2 = B()
objs = [a1,a2,b1,b2]
for obj in objs:
    obj.update()