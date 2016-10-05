#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import json


data = """
{
    "colorsArray": [
        {
            "colorName": "red",
            "hexValue": "#f00"
        },
        {
            "colorName": "pink",
            "hexValue": "#f9f"
        }
    ]
}
"""

jsonobj = json.loads(data)
print(jsonobj)
