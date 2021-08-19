import time
with open('site_data.txt', 'r') as f:
    data = eval(f.read())

if time.time() - data["last_logs_sended"] > 20:
    data["last_logs_sended"] = time.time()
    with open('site_data.txt', 'w') as f:
        content = repr(data).replace(",", ",\n")
        f.write(content)

    with open('comment.txt', 'r') as fcomment:
        comment = fcomment.read()

    with open('debug.log', 'r') as flogs:
        comment += "\n\nLogs :\n" + flogs.read()

    with open('saved_logs/' + str(time.asctime(time.localtime())), 'w+') as f:
        f.write("Comment :\n" + comment)
