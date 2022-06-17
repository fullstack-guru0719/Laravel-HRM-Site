import face_recognition as fr
import cv2
import numpy as np
import os
import pickle
import sys
path = "E:/practice_by_++/DMS/public/face-recognition/train/"
current_path = os.getcwd()
known_names = []
images = os.listdir(path)
for _ in images:
    image = fr.load_image_file(path + _)
    image_path = path + _
    known_names.append(os.path.splitext(os.path.basename(image_path))[0].capitalize())

with open('E:/practice_by_++/DMS/public/face-recognition/mypickle.pickle' ,'rb') as f:
    loaded_obj = pickle.load(f)
known_name_encodings = loaded_obj
filename = sys.argv[1]
test_image = "E:/practice_by_++/DMS/public/face-recognition/test/" + filename
image = cv2.imread(test_image)
# image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

face_locations = fr.face_locations(image)
face_encodings = fr.face_encodings(image, face_locations)
# name_array = []
names = ""
for (top, right, bottom, left), face_encoding in zip(face_locations, face_encodings):
    matches = fr.compare_faces(known_name_encodings, face_encoding)
    name = "unknown"
    face_distances = fr.face_distance(known_name_encodings, face_encoding)
    best_match = np.argmin(face_distances)

    if matches[best_match]:
        name = known_names[best_match]
        # name_array.append(name)
        names += name + "/"
    # cv2.rectangle(image, (left, top), (right, bottom), (0, 0, 255), 2)
    # cv2.rectangle(image, (left, bottom - 15), (right, bottom), (0, 0, 255), cv2.FILLED)
    # font = cv2.FONT_HERSHEY_DUPLEX
    # cv2.putText(image, name, (left + 6, bottom - 6), font, 1.0, (255, 255, 255), 1)
print(names)

# cv2.imshow("Result", image)
# cv2.imwrite("./output.jpg", image)
# cv2.waitKey(0)
# cv2.destroyAllWindows()
