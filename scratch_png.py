import struct
import zlib

with open(r'C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792494883744.png', 'rb') as f:
    magic = f.read(8)
    assert magic == b'‰PNG

'
    idat = bytearray()
    width = height = None
    color_type = None
    bit_depth = None
    while True:
        chunk = f.read(8)
        if not chunk:
            break
        length, ctype = struct.unpack('>I4s', chunk)
        data = f.read(length)
        crc = f.read(4)
        if ctype == b'IHDR':
            width, height, bit_depth, color_type, comp, filt, inter = struct.unpack('>IIBBBBB', data)
            print(f"IHDR: {width}x{height}, depth={bit_depth}, color_type={color_type}")
        elif ctype == b'IDAT':
            idat.extend(data)
        elif ctype == b'IEND':
            break

print(f"Total IDAT bytes: {len(idat)}")