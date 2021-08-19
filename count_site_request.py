import time
try:
    with open('site_data.txt', 'r') as f:
        data = eval(f.read())
except:
    data = {
        "count_request": 0,
        "count_lines": 0,
        "count_char": 0,
        "last_logs_sended":time.time()

    }

data["count_request"] += 1

with open('tikz_to_convert', 'r') as input_file:
    content = input_file.read()
    data["count_lines"] += len(content.split("\n"))
    data["count_char"] += len(content)

with open('site_data.txt', 'w') as f:
    content = repr(data).replace(",", ",\n")
    f.write(content)
