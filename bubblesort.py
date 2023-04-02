def judul():
    print("========== BUBBLE SORT ===========")

def asc(mylist):
    mylist = sorted(mylist)
    return(mylist)

def dsc(mylist):
    mylist = sorted(mylist, reverse = True)
    return(mylist)

print("Masukkan Tiga Buah Angka")
angka1 =int(input("Masukkan Angka Pertama:"))
angka2 = int(input("Masukkan Angka Kedua:"))
angka3 = int(input("Masukkan Angka Ketiga:"))
angka = [angka1,angka2,angka3]

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
