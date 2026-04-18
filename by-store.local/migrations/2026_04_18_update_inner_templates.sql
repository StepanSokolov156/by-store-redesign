-- UP: Replace old headerInner with new header + breadcrumbs on all inner page templates
-- Affected: templates 2-11, 13-23 (skip 1=main, 12=test, 24=copy)

UPDATE `Modx-BYStoresite_templates`
SET content = REPLACE(content, '[[$headerInner]]', CONCAT('[[$header]]', CHAR(10), CHAR(10), '        [[$breadcrumbs]]'))
WHERE id NOT IN (1, 12, 24)
  AND content LIKE '%[[$headerInner]]%';

-- DOWN: Revert — replace header + breadcrumbs back to headerInner
-- UPDATE `Modx-BYStoresite_templates`
-- SET content = REPLACE(content, CONCAT('[[$header]]', CHAR(10), CHAR(10), '        [[$breadcrumbs]]'), '[[$headerInner]]')
-- WHERE id NOT IN (1, 12, 24);
