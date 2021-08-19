import time
with open('site_data.txt', 'r') as f:
    last_logs = eval(f.read())["last_logs_sended"]

if time.time() - last_logs < 60:
    with open('comment.txt', 'r') as fcomment:
        comment = fcomment.read()

    with open('debug.log', 'r') as flogs:
        comment += "\n\nLogs :\n" + flogs.read()

    with open('saved_logs/' + str(time.asctime(LOCALTIME)), 'w+') as f:
        f.write(comment)
