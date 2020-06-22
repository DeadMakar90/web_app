#include <DHT.h>
#include <Adafruit_Sensor.h>
#include <Ethernet.h>
#include <SPI.h>
byte mac[] = {0x00, 0xAA, 0xBB, 0xCC, 0xDE, 0x02};
byte ip[] = {192,168,0,25};
EthernetClient client;
DHT dht(7,DHT11);

void setup() {
  Ethernet.begin(mac,ip);
  dht.begin();
  Serial.begin(9600);
}

void loop() {
  float t = dht.readTemperature();
  float h = dht.readHumidity();
  String msg = "GET /insert_data_ht.php?t="+String(t) + "&h="+String(h);
  client.connect("192.168.0.24",80);
  client.println(msg);
  delay (2000);
  client.stop();
  delay (8000);
 

}
