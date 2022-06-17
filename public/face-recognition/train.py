import face_recognition as fr
import cv2
import numpy as np
import os
import pickle
path = "./train/"

known_name_encodings = []

images = os.listdir(path)
for _ in images:
    image = fr.load_image_file(path + _)
    image_path = path + _
    encoding = fr.face_encodings(image)[0]
    known_name_encodings.append(encoding)

with open('mypickle.pickle', 'wb') as f:
    pickle.dump(known_name_encodings, f)