import sys

error_message = (
    "<h2 style='text-align: center; margin-top: 60px; color: red;'>Error: {}</h2>"
)
success_message = "<h2 style='text-align: center; margin-top: 32px; font-size: 2rem; border-top: 1px solid #d8d8d8; padding-top: 32px'>{}</h2>"
paragraph = "<p style='text-align: center; font-size: 1.5rem'>{}</p>"

try:
    numbers = [int(x) for x in sys.argv[1:]]
except ValueError:
    print(error_message.format("All inputs must be numeric."))
    sys.exit()

if any(x < 0 for x in numbers):
    print(error_message.format("All inputs must be positive."))
    sys.exit()


def average_logic():
    average = sum(numbers) / len(numbers)
    if average > 50:
        return "The average is greater than 50."
    else:
        return "The average is not greater than 50."


print(success_message.format("Calculating average..."))
print(paragraph.format(average_logic()))


def positive_logic():
    positive_count = sum(1 for x in numbers if x > 0)
    if positive_count & 1:
        return "The count of positive numbers is odd."
    else:
        return "The count of positive numbers is even."


print(success_message.format("Calculating positive count..."))
print(paragraph.format(positive_logic()))


def greater_than_10():
    return sorted(x for x in numbers if x > 10)


print(success_message.format("Sorting numbers..."))
print(paragraph.format(f"Original list: {numbers}"))
print(paragraph.format(f"Sorted list: {greater_than_10()}"))
