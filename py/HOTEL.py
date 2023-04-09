def judul():
    print("==================== HOTEL LUXURY ====================")

def line():
    print("---------------------------------------")

judul()
print("Ketikan tipe kamar yang ingin Kamu singgahi")
print("Hari        |Superior         |Deluxe           |Premium          |")
print("1-2 Hari    |Rp. 110.000/Malam|Rp. 160.000/Malam|Rp. 210.000/Malam|")
print("3-4 Hari    |Rp. 95.000/Malam |Rp. 145.000/Malam|Rp. 190.000/Malam|")
print(">5 Hari     |Rp. 85.000/Malam |Rp. 130.000/Malam|Rp. 170.000/Malam|")
nama = input("Masukkan Nama Anda: ")
tipe = input("Masukkan Tipe Kamar: ")
inap = int(input("Berapa lama Anda menginap: "))

# Logic
if tipe == "Superior" or "superior":
    if inap  <= 2:
        harga = 110000
        harga_kamar = 110000*inap
    elif inap <= 4:
        harga = 95000
        harga_kamar = 95000*inap
    elif inap >= 5:
        harga = 85000
        harga_kamar = 85000*inap
elif tipe == "Deluxe" or "deluxe":
    if inap  <= 2:
        harga = 160000
        harga_kamar = 160000*inap
    elif inap <= 4:
        harga = 145000
        harga_kamar = 145000*inap
    elif inap >= 5:
        harga = 130000
        harga_kamar = 130000*inap
elif tipe == "Premium" or "premium":
    if inap  <= 2:
        harga = 210000
        harga_kamar = 210000*inap
    elif inap <= 4:
        harga = 190000
        harga_kamar = 190000*inap
    elif inap >= 5:
        harga = 170000
        harga_kamar = 170000*inap
else:
    print("Keyword Error!")
    
# Pernyataan
line()
print (f"Nama Pemesan: ", nama)
print(f"Pemesanan", inap,"hari")
print(f"Anda telah memesan kamar bertipe", tipe, 
      "dengan harga Rp.",harga_kamar)
judul()

home = input("Pesan  Lagi? ")
back = print("")
if home == ("Y"):
    tipe = input("Masukkan Tipe Kamar: ")
    inap = int(input("Berapa lama Anda menginap: "))
    print (f"Nama Pemesan: ", nama)
    print(f"Pemesanan", inap,"hari")
    print(f"Anda telah memesan kamar bertipe", tipe, 
      "dengan harga Rp.",harga_kamar)
else:
    back

