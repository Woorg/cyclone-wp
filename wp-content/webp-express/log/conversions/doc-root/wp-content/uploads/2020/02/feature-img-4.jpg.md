WebP Express 0.17.3. Conversion triggered with the conversion script (wod/webp-realizer.php), 2020-02-12 14:54:43

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/02/feature-img-4.jpg
- destination: [doc-root]wp-content/uploads/2020/02/feature-img-4.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "lossy"
- metadata: "none"
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/02/feature-img-4.jpg
- destination: [doc-root]wp-content/uploads/2020/02/feature-img-4.webp
- encoding: "lossy"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- near-lossless: 60
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (return code: 1)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- C:\Users\Woorg\Documents\Sites\cyclone\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: C:\Users\Woorg\Documents\Sites\cyclone\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version. Result: version: *1.0.3*
Binaries ordered by version number.
- C:\Users\Woorg\Documents\Sites\cyclone\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 85. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
C:\Users\Woorg\Documents\Sites\cyclone\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]wp-content/uploads/2020/02/feature-img-4.jpg" -o "[doc-root]wp-content/uploads/2020/02/feature-img-4.webp" 2>&1

*Output:* 
Saving file '[doc-root]wp-content/uploads/2020/02/feature-img-4.webp'
File:      [doc-root]wp-content/uploads/2020/02/feature-img-4.jpg
Dimension: 448 x 272
Output:    28162 bytes Y-U-V-All-PSNR 42.06 41.32 42.37   41.98 dB
           (1.85 bpp)
block count:  intra4:        443  (93.07%)
              intra16:        33  (6.93%)
              skipped:         7  (1.47%)
bytes used:  header:            373  (1.3%)
             mode-partition:   2094  (7.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   18246 |      76 |      32 |       6 |   18360  (65.2%)
 intra16-coeffs:  |     204 |      17 |      10 |       6 |     237  (0.8%)
  chroma coeffs:  |    6904 |      61 |      57 |      47 |    7069  (25.1%)
    macroblocks:  |      93%|       2%|       2%|       3%|     476
      quantizer:  |      14 |      10 |       8 |       8 |
   filter level:  |       4 |       2 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   25354 |     154 |      99 |      59 |   25666  (91.1%)

Success
cwebp succeeded :)

Converted image in 1476 ms, reducing file size with 34% (went from 42 kb to 28 kb)
