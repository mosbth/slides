class A:
    def __init__(self):
        self.attr = 0
    def test (self):
        pass
class B:
    def __init__(self):
        self.attr = 0
    def test (self):
        pass
    def new(self):
        pass

######################

class A:
    def __init__(self):
        self.attr = 0
    def test (self):
        pass

class B(A):
    def new(self):
        pass