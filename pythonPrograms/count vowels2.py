#count vowels
ip_str = input("Enter a string: ")

ip_str = ip_str.casefold()

count = ip_str.casefold()

count = {x:sum([1 for char in ip_str if char == x]) for x in "aeiou"}

print(count)