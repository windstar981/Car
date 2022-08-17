$(document).ready(function () {
    let data = [
        {
            year: 1900,
            nameYear: 'Canh Tý',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {
            year: 1901,
            nameYear: 'Tân Sửu',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {
            year: 1902,
            nameYear: 'Nhâm Dần',
            life: 'Kim Bạch Kim',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1903, nameYear: 'Quý Mão', life: 'Kim Bạch Kim', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1904,
            nameYear: 'Giáp Thìn',
            life: 'Phúc Đăng Hỏa',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1905,
            nameYear: 'Ất Tỵ',
            life: 'Phúc Đăng Hỏa',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1906,
            nameYear: 'Bính Ngọ',
            life: 'Thiên Hà Thủy',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1907,
            nameYear: 'Đinh Mùi',
            life: 'Thiên Hà Thủy',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1908,
            nameYear: 'Mậu Thân',
            life: 'Đại Trạch Thổ',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1909,
            nameYear: 'Kỷ Dậu',
            life: 'Đại Trạch Thổ',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {
            year: 1910,
            nameYear: 'Canh Tuất',
            life: 'Thoa Xuyến Kim',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {
            year: 1911,
            nameYear: 'Tân Hợi',
            life: 'Thoa Xuyến Kim',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1912, nameYear: 'Nhâm Tý', life: 'Tang Đố Mộc', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1913,
            nameYear: 'Quý Sửu',
            life: 'Tang Đố Mộc',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1914,
            nameYear: 'Giáp Dần',
            life: 'Đại Khê Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {year: 1915, nameYear: 'Ất Mão', life: 'Đại Khê Thủy', sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}}, {
            year: 1916,
            nameYear: 'Bính Thìn',
            life: 'Sa Trung Thổ',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {year: 1917, nameYear: 'Đinh Tỵ', life: 'Sa Trung Thổ', sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}}, {
            year: 1918,
            nameYear: 'Mậu Ngọ',
            life: 'Thiên Thượng Hỏa',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {
            year: 1919,
            nameYear: 'Kỷ Mùi',
            life: 'Thiên Thượng Hỏa',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {
            year: 1920,
            nameYear: 'Canh Thân',
            life: 'Thạch Lựu Mộc',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {
            year: 1921,
            nameYear: 'Tân Dậu',
            life: 'Thạch Lựu Mộc',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 1922, nameYear: 'Nhâm Tuất', life: 'Đại Hải Thủy', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 1923,
            nameYear: 'Quý Hợi',
            life: 'Đại Hải Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1924,
            nameYear: 'Giáp Tý',
            life: 'Hải Trung Kim',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1925,
            nameYear: 'Ất Sửu',
            life: 'Hải Trung Kim',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1926,
            nameYear: 'Bính Dần',
            life: 'Lư Trung Hỏa',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1927,
            nameYear: 'Đinh Mão',
            life: 'Lư Trung Hỏa',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 1928, nameYear: 'Mậu Thìn', life: 'Đại Lâm Mộc', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 1929,
            nameYear: 'Kỷ Tỵ',
            life: 'Đại Lâm Mộc',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1930, nameYear: 'Canh Ngọ', life: 'Lộ Bàng Thổ', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1931,
            nameYear: 'Tân Mùi',
            life: 'Lộ Bàng Thổ',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1932,
            nameYear: 'Nhâm Thân',
            life: 'Kiếm Phong Kim',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1933,
            nameYear: 'Quý Dậu',
            life: 'Kiếm Phong Kim',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1934,
            nameYear: 'Giáp Tuất',
            life: 'Sơn Đầu Hỏa',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {year: 1935, nameYear: 'Ất Hợi', life: 'Sơn Đầu Hỏa', sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}}, {
            year: 1936,
            nameYear: 'Bính Tý',
            life: 'Giang Hạ Thủy',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 1937, nameYear: 'Đinh Sửu', life: 'Giang Hạ Thủy', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 1938,
            nameYear: 'Mậu Dần',
            life: 'Thành Đầu Thổ',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1939, nameYear: 'Kỷ Mão', life: 'Thành Đầu Thổ', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1940,
            nameYear: 'Canh Thìn',
            life: 'Bạch Lạp Kim',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1941,
            nameYear: 'Tân Tỵ',
            life: 'Bạch Lạp Kim',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1942,
            nameYear: 'Nhâm Ngọ',
            life: 'Dương Liễu Mộc',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1943,
            nameYear: 'Quý Mùi',
            life: 'Dương Liễu Mộc',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1944,
            nameYear: 'Giáp Thân',
            life: 'Tuyền Trung Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1945,
            nameYear: 'Ất Dậu',
            life: 'Tuyền Trung Thủy',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {
            year: 1946,
            nameYear: 'Bính Tuất',
            life: 'Ốc Thượng Thổ',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {
            year: 1947,
            nameYear: 'Đinh Hợi',
            life: 'Ốc Thượng Thổ',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {
            year: 1948,
            nameYear: 'Mậu Tý',
            life: 'Thích Lịch Hỏa',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 1949, nameYear: 'Kỷ Sửu', life: 'Thích Lịch Hỏa', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 1950,
            nameYear: 'Canh Dần',
            life: 'Tòng Bá Mộc',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {year: 1951, nameYear: 'Tân Mão', life: 'Tòng Bá Mộc', sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}}, {
            year: 1952,
            nameYear: 'Nhâm Thìn',
            life: 'Trường Lưu Thủy',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1953,
            nameYear: 'Quý Tỵ',
            life: 'Trường Lưu Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1954,
            nameYear: 'Giáp Ngọ',
            life: 'Sa Trung Kim',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 1955, nameYear: 'Ất Mùi', life: 'Sa Trung Kim', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 1956,
            nameYear: 'Bính Thân',
            life: 'Sơn Hạ Hỏa',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1957, nameYear: 'Đinh Dậu', life: 'Sơn Hạ Hỏa', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1958,
            nameYear: 'Mậu Tuất',
            life: 'Bình Địa Mộc',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1959,
            nameYear: 'Kỷ Hợi',
            life: 'Bình Địa Mộc',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1960,
            nameYear: 'Canh Tý',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1961,
            nameYear: 'Tân Sửu',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1962,
            nameYear: 'Nhâm Dần',
            life: 'Kim Bạch Kim',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1963,
            nameYear: 'Quý Mão',
            life: 'Kim Bạch Kim',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {
            year: 1964,
            nameYear: 'Giáp Thìn',
            life: 'Phúc Đăng Hỏa',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {year: 1965, nameYear: 'Ất Tỵ', life: 'Phúc Đăng Hỏa', sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}}, {
            year: 1966,
            nameYear: 'Bính Ngọ',
            life: 'Thiên Hà Thủy',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 1967, nameYear: 'Đinh Mùi', life: 'Thiên Hà Thủy', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 1968,
            nameYear: 'Mậu Thân',
            life: 'Đại Trạch Thổ',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {year: 1969, nameYear: 'Kỷ Dậu', life: 'Đại Trạch Thổ', sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}}, {
            year: 1970,
            nameYear: 'Canh Tuất',
            life: 'Thoa Xuyến Kim',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1971,
            nameYear: 'Tân Hợi',
            life: 'Thoa Xuyến Kim',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {year: 1972, nameYear: 'Nhâm Tý', life: 'Tang Đố Mộc', sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}}, {
            year: 1973,
            nameYear: 'Quý Sửu',
            life: 'Tang Đố Mộc',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {
            year: 1974,
            nameYear: 'Giáp Dần',
            life: 'Đại Khê Thủy',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 1975, nameYear: 'Ất Mão', life: 'Đại Khê Thủy', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 1976,
            nameYear: 'Bính Thìn',
            life: 'Sa Trung Thổ',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 1977,
            nameYear: 'Đinh Tỵ',
            life: 'Sa Trung Thổ',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1978,
            nameYear: 'Mậu Ngọ',
            life: 'Thiên Thượng Hỏa',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1979,
            nameYear: 'Kỷ Mùi',
            life: 'Thiên Thượng Hỏa',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1980,
            nameYear: 'Canh Thân',
            life: 'Thạch Lựu Mộc',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1981,
            nameYear: 'Tân Dậu',
            life: 'Thạch Lựu Mộc',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 1982, nameYear: 'Nhâm Tuất', life: 'Đại Hải Thủy', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 1983,
            nameYear: 'Quý Hợi',
            life: 'Đại Hải Thủy',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {
            year: 1984,
            nameYear: 'Giáp Tý',
            life: 'Hải Trung Kim',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 1985, nameYear: 'Ất Sửu', life: 'Hải Trung Kim', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 1986,
            nameYear: 'Bính Dần',
            life: 'Lư Trung Hỏa',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1987,
            nameYear: 'Đinh Mão',
            life: 'Lư Trung Hỏa',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1988,
            nameYear: 'Mậu Thìn',
            life: 'Đại Lâm Mộc',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {year: 1989, nameYear: 'Kỷ Tỵ', life: 'Đại Lâm Mộc', sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}}, {
            year: 1990,
            nameYear: 'Canh Ngọ',
            life: 'Lộ Bàng Thổ',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 1991, nameYear: 'Tân Mùi', life: 'Lộ Bàng Thổ', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 1992,
            nameYear: 'Nhâm Thân',
            life: 'Kiếm Phong Kim',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {
            year: 1993,
            nameYear: 'Quý Dậu',
            life: 'Kiếm Phong Kim',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 1994, nameYear: 'Giáp Tuất', life: 'Sơn Đầu Hỏa', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 1995,
            nameYear: 'Ất Hợi',
            life: 'Sơn Đầu Hỏa',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 1996,
            nameYear: 'Bính Tý',
            life: 'Giang Hạ Thủy',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 1997,
            nameYear: 'Đinh Sửu',
            life: 'Giang Hạ Thủy',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 1998,
            nameYear: 'Mậu Dần',
            life: 'Thành Đầu Thổ',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 1999,
            nameYear: 'Kỷ Mão',
            life: 'Thành Đầu Thổ',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 2000, nameYear: 'Canh Thìn', life: 'Bạch Lạp Kim', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 2001,
            nameYear: 'Tân Tỵ',
            life: 'Bạch Lạp Kim',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {
            year: 2002,
            nameYear: 'Nhâm Ngọ',
            life: 'Dương Liễu Mộc',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {year: 2003, nameYear: 'Quý Mùi', life: 'Dương Liễu Mộc', sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}}, {
            year: 2004,
            nameYear: 'Giáp Thân',
            life: 'Tuyền Trung Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 2005,
            nameYear: 'Ất Dậu',
            life: 'Tuyền Trung Thủy',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {
            year: 2006,
            nameYear: 'Bính Tuất',
            life: 'Ốc Thượng Thổ',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {
            year: 2007,
            nameYear: 'Đinh Hợi',
            life: 'Ốc Thượng Thổ',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {
            year: 2008,
            nameYear: 'Mậu Tý',
            life: 'Thích Lịch Hỏa',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 2009, nameYear: 'Kỷ Sửu', life: 'Thích Lịch Hỏa', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 2010,
            nameYear: 'Canh Dần',
            life: 'Tòng Bá Mộc',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 2011, nameYear: 'Tân Mão', life: 'Tòng Bá Mộc', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 2012,
            nameYear: 'Nhâm Thìn',
            life: 'Trường Lưu Thủy',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 2013,
            nameYear: 'Quý Tỵ',
            life: 'Trường Lưu Thủy',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {
            year: 2014,
            nameYear: 'Giáp Ngọ',
            life: 'Sa Trung Kim',
            sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}
        }, {year: 2015, nameYear: 'Ất Mùi', life: 'Sa Trung Kim', sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}}, {
            year: 2016,
            nameYear: 'Bính Thân',
            life: 'Sơn Hạ Hỏa',
            sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}
        }, {year: 2017, nameYear: 'Đinh Dậu', life: 'Sơn Hạ Hỏa', sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}}, {
            year: 2018,
            nameYear: 'Mậu Tuất',
            life: 'Bình Địa Mộc',
            sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}
        }, {year: 2019, nameYear: 'Kỷ Hợi', life: 'Bình Địa Mộc', sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}}, {
            year: 2020,
            nameYear: 'Canh Tý',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}
        }, {
            year: 2021,
            nameYear: 'Tân Sửu',
            life: 'Bích Thượng Thổ',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }, {
            year: 2022,
            nameYear: 'Nhâm Dần',
            life: 'Kim Bạch Kim',
            sex: {man: 'Khôn: Thổ', woman: 'Khảm: Thủy'}
        }, {year: 2023, nameYear: 'Quý Mão', life: 'Kim Bạch Kim', sex: {man: 'Tốn: Mộc', woman: 'Khôn: Thổ'}}, {
            year: 2024,
            nameYear: 'Giáp Thìn',
            life: 'Phúc Đăng Hỏa',
            sex: {man: 'Chấn: Mộc', woman: 'Chấn: Mộc'}
        }, {year: 2025, nameYear: 'Ất Tỵ', life: 'Phúc Đăng Hỏa', sex: {man: 'Khôn: Thổ', woman: 'Tốn: Mộc'}}, {
            year: 2026,
            nameYear: 'Bính Ngọ',
            life: 'Thiên Hà Thủy',
            sex: {man: 'Khảm: Thủy', woman: 'Cấn: Thổ'}
        }, {year: 2027, nameYear: 'Đinh Mùi', life: 'Thiên Hà Thủy', sex: {man: 'Ly: Hỏa', woman: 'Càn: Kim'}}, {
            year: 2028,
            nameYear: 'Mậu Thân',
            life: 'Đại Trạch Thổ',
            sex: {man: 'Cấn: Thổ', woman: 'Đoài: Kim'}
        }, {year: 2029, nameYear: 'Kỷ Dậu', life: 'Đại Trạch Thổ', sex: {man: 'Đoài: Kim', woman: 'Cấn: Thổ'}}, {
            year: 2030,
            nameYear: 'Canh Tuất',
            life: 'Thoa Xuyến Kim',
            sex: {man: 'Càn: Kim', woman: 'Ly: Hỏa'}
        }]
    console.log(data);

    let arrResult = [
        {
            type: 'Hướng tốt',
            'Càn': 'Đoài',
            'Khảm': 'Tốn',
            'Cấn': 'Khôn',
            'Chấn': 'Ly',
            'Đoài': 'Càn',
            'Tốn': 'Khảm',
            'Khôn': 'Cấn',
            'Ly': 'Chấn',
            'Content': 'Tốt chủ phú quý, giàu sang, an khang thịnh vượng'
        },
        {
            type: 'Hướng tốt',
            'Càn': 'Cấn',
            'Khảm': 'Chấn',
            'Tốn ': 'Ly',
            'Khôn ': 'Đoài',
            'Cấn': 'Càn',
            'Chấn': 'Khảm',
            'Ly': 'Tốn',
            'Đoài': 'Khôn',
            'Content': 'Tốt chủ phúc lộc, giàu sang, con cháu thông minh hiếu thảo'
        },
        {
            type: 'Hướng tốt',
            'Càn': 'Khôn',
            'Khảm': 'Ly',
            'Cấn': 'Đoài',
            'Chấn': 'Tốn',
            'Khôn': 'Càn',
            'Ly': 'Khảm',
            'Đoài': 'Cấn',
            'Tốn': 'Chấn',
            'Content': 'Tốt chủ phúc lộc, gia đạo an khang thịnh vượng'
        },
        {
            type: 'Hướng tốt',
            'Càn': 'Càn',
            'Đoài': 'Đoài',
            'Ly': 'Ly',
            'Chấn': 'Chấn',
            'Tốn': 'Tốn',
            'Khảm': 'Khảm',
            'Cấn': 'Cấn',
            'Khôn': 'Khôn',
            'Content': 'Tốt chủ yên ổn, an khang thịnh vượng'
        },
        {
            type: 'Hướng xấu',
            'Càn': 'Tốn',
            'Khảm': 'Đoài',
            'Cấn': 'Ly',
            'Chấn': 'Khôn',
            'Tốn': 'Càn',
            'Đoài': 'Khảm',
            'Ly': 'Cấn',
            'Khôn': 'Chấn',
            'Content': ' Xấu chủ bệnh tật, bất hoà, gia đạo suy bại'
        },
        {
            type: 'Hướng xấu',
            'Càn': 'Khảm',
            'Cấn': 'Chấn',
            'Tốn': 'Đoài',
            'Ly': 'Khôn',
            'Khảm': 'Càn',
            'Chấn': 'Cấn',
            'Đoài': 'Tốn',
            'Khôn': 'Ly',
            'Content': 'Xấu chủ kiện tụng, thị phi, gia đạo bất hoà'
        },
        {
            type: 'Hướng xấu',
            'Càn': 'Chấn',
            'Khảm': 'Cấn',
            'Ly': 'Đoài',
            'Khôn': 'Tốn',
            'Chấn': 'Càn',
            'Cấn': 'Khảm',
            'Đoài': 'Ly',
            'Tốn': 'Khôn',
            'Content': 'Rất xấu, chủ bệnh tật, suy bại, con cái phá tán sản nghiệp'
        },
        {
            type: 'Hướng xấu',
            'Càn': 'Ly',
            'Khảm ': 'Khôn',
            'Cấn': 'Tốn',
            'Chấn': 'Đoài',
            'Ly': 'Càn',
            'Khôn': 'Khảm',
            'Tốn': 'Cấn',
            'Đoài': 'Chấn',
            'Content': 'Xấu chủ bệnh tật, thị phi, kiện tụng, gia đạo suy bại'
        },

    ]
    let objDirection =
        {
            'Khảm': 'Bắc',
            'Cấn': 'Đông Bắc',
            'Chấn': 'Đông',
            'Tốn': 'Đông Nam',
            'Ly': 'Nam',
            'Khôn': 'Tây Nam',
            'Đoài': 'Tây',
            'Càn': 'Tây Bắc'
        }

    let year = 0;
    let sex = 'man';
    let direction = 'Chấn';
    $('#man').change(function () {
        sex = 'man';
    });
    $('#woman').change(function () {
        sex = 'woman';
    });

    let validate = 0;

    $('.year').keyup(function(){
        if(validate){
            if($('.year').val()=='')
            {
                $('.validate').removeClass('d-none');
            }
            else if(Number($('.year').val())<1900 || Number($('.year').val())>2030){
                $('.validate').removeClass('d-none');
                $('.validate').html('Mời bạn nhập năm sinh hợp lệ')
            }
            else{
                $('.validate').addClass('d-none');
            }
        }
    })

    function validattion(year){
        if(year=='')
        {
            $('.validate').removeClass('d-none');
        }
        else if(Number(year)<1900 || Number(year)>2030){
            $('.validate').removeClass('d-none');
            $('.validate').html('Mời bạn nhập năm sinh hợp lệ')
        }
        else{
            $('.validate').addClass('d-none');
            return true;
        }
    }

    function getNameYear(year) {
        for (let i = 0; i < data.length; i++) {
            if (data[i].year == year) {
                return data[i].nameYear;
            }
        }
    }

    function getLife(year) {
        for (let i = 0; i < data.length; i++) {
            if (data[i].year == year) {
                return data[i].life;
            }
        }
    }

    function getDestiny(year, sex) {
        for (let i = 0; i < data.length; i++) {
            if (data[i].year == year) {
                return data[i].sex[sex].split(':')[0];
            }
        }
    }

    function getNameDirection(direction) {
        return objDirection[direction];
    }

    function getResult(direction) {
        let arrTemp = [];
        for (let i = 0; i < arrResult.length; i++) {
            arrTemp.push(getNameDirection(arrResult[i][direction]))
        }
        return  arrTemp ;
    }

    function getStatusDirection(arr, direction){
        for(let i=0 ; i<arr.length-4 ; i++)
        {
            if(arr[i] == direction){
                return 'Hướng tốt';
            }
        }
        return 'Hướng xấu';
    }


    $('.btn-submit').click(function () {
        validate = 1;
        year = Number($('.year').val());
        if(!validattion(year)){
            return;
        }
        $('.wrap-result').removeClass('d-none')
        direction = $('.select-direction').val();
        $('.number-year').html(year);
        $('.name-year').html(getNameYear(year));
        $('.hexagrams').html(getLife(year));
        $('.five-elements').html(getDestiny(year, sex));
        $('.direction').html('hướng ' + getNameDirection(direction));
        let arrResultDirection = getResult(getDestiny(year, sex));
        $('.direction-status').html(getStatusDirection(arrResultDirection,getNameDirection(direction)));
        let good = '';
        let bad = '';
        for(let i=0; i<arrResultDirection.length ; i++)
        {
            if(i<4){
                good += arrResultDirection[i] + ', ';
            }
            else{
                bad += arrResultDirection[i] + ', ';
            }
        }

        $('.good-directions').html(good);
        $('.bad-directions').html(bad);


    })

});

