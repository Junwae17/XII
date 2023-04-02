def judul():
    print("==================== HOTEL DEL LUNA ====================")

def line():
    print("---------------------------------------")

judul()
print("Ketikan tipe kamar yang ingin Kamu singgahi")
print("1. Superior, harga Rp. 500.000")
print("2. Deluxe, harga Rp. 300.000")
print("3. Premium, harga Rp. 250.000")
tipe = input("Masukkan Tipe Kamar: ")
inap = int(input("Berapa lama Anda menginap: "))

# Logic
if tipe == "Superior" or "superior":
    harga = 500000 * inap
elif tipe == "Deluxe" or "deluxe":
    harga = 300000 * inap
elif tipe == "Premium" or "premium":
    harga = 250000 * inap
else:
    print("Keyword Error!")
    
# Pernyataan
line()
print(f"Pemesanan", inap,"hari")
print(f"Anda telah memesan kamar bertipe", tipe, 
      "dengan harga Rp.",harga)
judul()
