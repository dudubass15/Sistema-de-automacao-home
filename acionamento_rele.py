#coding: utf-8
import RPi.GPIO as GPIO
import cgi, cgitb

GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.OUT)

GPIO.output(11, 1)
GPIO.setwarnings(False)

data = cgi.FieldStorage()

output = data["var1"]

print(output)

try:
	request = 'ligado'

	while(True):
		if request == 'desligado' :
			GPIO.output(11, 0)
			print("Desligado")

		elif request == 'ligado' :
			GPIO.output(11, 1)
			print("ligado")

except KeyboardInterrupt:
	GPIO.cleanup()