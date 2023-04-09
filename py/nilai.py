def judul():
    print("========== Nilai ===========")

def asc(mylist):
    mylist = sorted(mylist)
    return(mylist)

def dsc(mylist):
    mylist = sorted(mylist, reverse = True)
    return(mylist)

print("Masukkan Lima Buah Angka")
angka1 =int(input("Masukkan Angka Pertama:"))
angka2 = int(input("Masukkan Angka Kedua:"))
angka3 = int(input("Masukkan Angka Ketiga:"))
angka4 = int(input("Masukkan Angka Keempat:"))
angka5 = int(input("Masukkan Angka Kelima:"))

angka = [angka1,angka2,angka3,angka4,angka5]

def rata_rata(angka):
    return sum(angka)/len(angka)

print("Nilai Ascending:")
print(asc(angka))
print("Nilai Descending:")
print(dsc(angka))

print("Nilai Terbesar: ",max(angka))
print("Nilai Terkecil: ",min(angka))
print("Rata-rata: ",rata_rata(angka))
judul()
